<style>
.footerStyle {
    background-color: #000;
    color: white;
    padding: 2rem;
    font-size: 1rem;
}

.img-footer img {
    height: 80px; /* Adjusted for better scaling */
    width: auto;
}

.social-icon i {
    padding: 8px;
    color: white;
    font-size: 1.5rem; /* Adjust size for better readability */
}

.social-icon {
    color: white; /* Ensures icons are white */
    margin-right: 10px; /* Spacing between icons */
}

.social-icon:hover {
    color: #ccc; /* Lighter shade on hover for interactivity */
}

.container {
    max-width: 1200px;
    margin: auto;
    padding: 0 15px;
}

.row {
    align-items: center; /* Centers items vertically if needed */
}

/* Keep all text aligned to the left */
p, .img-footer, .social-icons {
    text-align: left;
}

@media (max-width: 768px) {
    .text-center {
        text-align: left;
    }
}

  
</style>
<footer class="footerStyle">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="img-footer">
                    <img src="assets/media/logo/cinetrack-03.png" alt="CineTrack Logo">
                </div>
                <p>Email: cinetrack@gmail.com</p>
                <p>Phone: (123) 456-7890</p>
                <div class="social-icons d-flex mt-3 mb-3">
                    <a href="mailto:cinetrack6@gmail.com" class="social-icon"><i class="fa-regular fa-envelope fa-xl"></i></a>
                    <a href="https://www.instagram.com" class="social-icon"><i class="fa-brands fa-instagram fa-xl"></i></a>
                    <a href="https://www.youtube.com" class="social-icon"><i class="fa-brands fa-youtube fa-xl"></i></a>
                </div>
                <p>&copy; 2024 CineTrack. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
