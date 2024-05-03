<?php
require './config.php'; // Connect to the database

if (isset($_GET['query'])) {
  $search_query = $_GET['query'];

  // SQL query to search for movies based on title
  $sql = "SELECT * FROM movies WHERE title LIKE '%$search_query%'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Display search results
    echo '<div class="container">';
    echo '<h2>Search Results</h2>';
    echo '<div class="movie-grid">';
    while ($row = $result->fetch_assoc()) {
      $movie_title = urlencode($row['title']);
      echo '<a href="movie.php?movie=' . $movie_title . '" class="movie">';
      echo '<img src="' . $row['img_path'] . '" alt="' . $row['title'] . '">';
      echo '<h3>' . $row['title'] . '</h3>';
      echo '</a>';
    }
    echo '</div>';
    echo '</div>';
  } else {
    echo '<div class="container">No movies found</div>';
  }
}

// Close connection
$conn->close();
?>
