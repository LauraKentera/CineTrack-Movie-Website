<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CineTrack</title>
  <link rel="icon" type="image/x-icon" href="assets/media/logo/CineTrackWithBackground.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/css/homepage.css">
  <link rel="stylesheet" href="assets/css/footer.css">
  <link rel="stylesheet" href="assets/css/styles.css">


</head>

<body>




  <section class="movies">
    <div class="container">
      <h2>
        You Searched For:
      </h2>
      <div class="movies-list">

        <?php
        require './config.php'; // Connect to the database
        
        if (isset($_GET['query'])) {
          $search_query = $_GET['query'];

          // SQL query to search for movies based on title
          $sql = "SELECT * FROM movies WHERE title LIKE '%$search_query%'";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

              $movie_title = urlencode($row['title']);
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
          } else { ?>
            <h3 style="color: white; display: grid; grid-column-start: 1; grid-column-end: 6; margin-top: 7em; text-align: center;">
              Search Not Available Right Now. Hang tight, the CineTrack team is working on getting it to you as soon as
              possible. Thank You for your patience!
            </h3>
            <?php
          }
        }

        // Close connection
        $conn->close();
        ?>
      </div>
</body>

</html>