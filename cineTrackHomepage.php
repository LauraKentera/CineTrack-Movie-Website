<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CineTrack</title>
  <link rel="icon" type="image/x-icon" href="assets/media/logo/CineTrackWithBackground.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/css/homepage.css">
  <link rel="stylesheet" href="assets/css/footer.css">
  <link rel="stylesheet" href="assets/css/styles.css">


</head>

<body>
  <header>
    <!-- SEARCH AND LOGIN -->
    <div class="search-user">

      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">

      <i class="fas fa-user-circle"></i>
    </div>
    <!-- CAROUSEL -->

    <div id="carouselExampleFade" class="carousel slide carousel-fade">
      <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: linear-gradient(rgba(0, 0, 0, 0.416),rgba(0, 0, 0, 0.581)), url(assets/media/dune.webp);"></div>
        <div class="carousel-item" style="background-image: linear-gradient(rgba(0, 0, 0, 0.416),rgba(0, 0, 0, 0.581)), url(assets/media/wonka.jpeg);"></div>
        <div class="carousel-item" style="background-image: linear-gradient(rgba(0, 0, 0, 0.416),rgba(0, 0, 0, 0.581)), url(assets/media/oppenhaimer.jpeg);"></div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </header>

  <!-- NAVIGATION -->

  <nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav m-auto mb-2 mt-3 mb-lg-0 d-flex justify-content-between">
          <li class="nav-item">
            <a class="nav-link " href="cineTrackAction.html">Action</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cineTrackAnimated.html">Animated</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cineTrackComedy.html">Comedy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cineTrackHorror.html">Horror</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cineTrackRomance.html">Romance</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cineTrackSciFi.html">Sc-Fi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cineTrackThriller.html">Thriller</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>




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
        // Connect to database
        require './config.php';

        // Query to fetch movies
        $sql = "SELECT * FROM movies WHERE rating >= 8.3 ORDER BY CAST(rating AS DECIMAL) DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // Output data of each row
          while ($row = $result->fetch_assoc()) {
        ?>
            <div class="movie-card">
              <div class="card-banner">
                <img src="<?php echo $row["img_path"]; ?>" alt="<?php echo $row["title"]; ?>">
              </div>
              <div class="title-wrapper">
                <h2 class="card-title"><?php echo $row["title"]; ?></h2>
                <time><?php echo $row["date"]; ?></time>
              </div>
              <div class="card-meta">
                <span class="badge"><?php echo $row["genre"]; ?></span>
                <span class="rating"><ion-icon name="star"></ion-icon><?php echo $row["rating"]; ?></span>
                <span class="duration"><ion-icon name="time"></ion-icon><?php echo $row["length"]; ?> mins</span>
              </div>
            </div>
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







  <footer>
    <div class="containefdr">
      <p>&copy; 2024 CineTrack. All Rights Reserved.</p>
    </div>
  </footer>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="assets/js/main.js"></script>


</body>

</html>