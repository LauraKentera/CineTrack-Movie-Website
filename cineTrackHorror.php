<?php
include "./assets/inc/header1.php";
?>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php
    require './config.php';
    // Select three random wideImagePath from the movies table
    $sql = "SELECT * FROM movies WHERE genre = 'Horror'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $active = true;
      // Output data of each row
      while ($row = $result->fetch_assoc()) {
    ?>
        <div class="carousel-item <?php echo $active ? 'active' : ''; ?>">
          <img src="<?php echo $row["wideImagePath"]; ?>" class="d-block w-100" alt="...">
        </div>
    <?php
        $active = false;
      }
    } else {
      echo "0 results";
    }

    // Close connection
    $conn->close();
    ?>
  </div>
</div>

<?php
include "./assets/inc/header2.php";
?>




  <section class="movies">
    <div class="container">
      <h2 class="mb-5">Horror Movies</h2>
      <div class="movies-list">
        <?php
        require './config.php';
        $sql = "SELECT * FROM movies WHERE genre = 'Horror'";
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






  <?php
        include 'assets/inc/footer.php'
        ?>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="assets/js/main.js"></script>


</body>

</html>