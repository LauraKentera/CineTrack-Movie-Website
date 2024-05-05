<?php
include "./assets/inc/header1.php";
?>
<div class="carousel-item active" style="background-image: linear-gradient(rgba(0, 0, 0, 0.416),rgba(0, 0, 0, 0.581)), url(assets/media/dune.webp);"></div>
<div class="carousel-item" style="background-image: linear-gradient(rgba(0, 0, 0, 0.416),rgba(0, 0, 0, 0.581)), url(assets/media/wonka.jpeg);"></div>
<div class="carousel-item" style="background-image: linear-gradient(rgba(0, 0, 0, 0.416),rgba(0, 0, 0, 0.581)), url(assets/media/oppenhaimer.jpeg);"></div>
<?php
include "./assets/inc/header2.php";
?>



  <section class="hero">
    <div class="contafdiner">
      <h2>Welcome to CineTrack</h2>
      <p>Discover the latest movies, TV shows, and more!</p>
      <a href="#" class="btn">Explore Now</a>
    </div>
  </section>



  <section class="movies">
    <div class="container">
      <h2>Featured Movies</h2>
      <div class="movies-list">
        <?php
        require './config.php';
        $sql = "SELECT * FROM movies ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // Output data of each row
          while ($row = $result->fetch_assoc()) {
        ?>
            <a href="movie.php?movie=<?php echo urlencode($row["title"]); ?>" class="movie-card">
              <div class="movie-card">

                <div class="card-banner">

                  <img src="<?php echo $row["img_path"]; ?>" alt="<?php echo $row["title"]; ?>">

                </div>
                <div class="title-wrapper">
                  <h2 class="card-title"><?php echo $row["title"]; ?></h2>
                </div>
                <div class="card-meta">
                  <span class="badge"><?php echo $row["genre"]; ?></span>
                  <span class="rating"></ion-icon><?php echo $row["rating"]; ?></span>
                  <span class="duration"><?php echo $row["length"]; ?> mins</span>
                </div>
              </div>
            </a>
        <?php
          }
        } else {
          echo "0 results";
        }

        // Close connection
        $conn->close();
        ?>
      </div>
    </div>
  </section>



  <footer class="bg-dark text-white pt-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Discover</h3>
                <ul class="list-unstyled">
                    <li><a href="#" class="footer-link">Buy & Sell</a></li>
                    <li><a href="#" class="footer-link">Merchant</a></li>
                    <li><a href="#" class="footer-link">Giving Back</a></li>
                    <li><a href="#" class="footer-link">Help & Support</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3>About</h3>
                <ul class="list-unstyled">
                    <li><a href="#" class="footer-link">Staff</a></li>
                    <li><a href="#" class="footer-link">Team</a></li>
                    <li><a href="#" class="footer-link">Careers</a></li>
                    <li><a href="#" class="footer-link">Blog</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3>Resources</h3>
                <ul class="list-unstyled">
                    <li><a href="#" class="footer-link">Security</a></li>
                    <li><a href="#" class="footer-link">Global</a></li>
                    <li><a href="#" class="footer-link">Charts</a></li>
                    <li><a href="#" class="footer-link">Privacy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>



  



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="assets/js/main.js"></script>


</body>

</html>