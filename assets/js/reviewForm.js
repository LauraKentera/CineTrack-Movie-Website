function submitReview() {
    var reviewText = document.getElementById("reviewText").value;

    document.getElementById('reviewText').addEventListener('input', function() {
        if (this.scrollHeight > 100) {  
            this.style.overflowY = 'scroll';
        } else {
            this.style.height = 'auto';  
            this.style.height = this.scrollHeight + 'px';
        }
    });
    
    
    
    // Simple validation
    if (!reviewText) {
        alert("Please enter a review.");
        return false;
    }

    // Send data to a PHP script via Fetch API
    fetch("submit_review.php", {
        method: "POST",
        body: new URLSearchParams(`review=${reviewText}`)
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("reviews").innerHTML += `<p>${reviewText}</p>`; // Display the new review
        document.getElementById("reviewText").value = ''; // Clear the text area
        alert("Review submitted!");
    })
    .catch(error => {
        console.error('Error:', error);
        alert("Failed to submit review.");
    });

    return false; // Prevent form from submitting traditionally   
    
}
