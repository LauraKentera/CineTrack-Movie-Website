<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $review = $_POST['review'];

    // You should add database insertion code here
    // For now, we'll just return the same review text
    echo htmlspecialchars($review);
}
?>
