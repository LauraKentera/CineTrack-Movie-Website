

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Information</title>

</head>
<body >  
    <h1>Movie Information</h1>
    <?php
        require 'config.php';
        $movie = null;

        if (isset($_GET['movie'])) {
            
            $movie_title = $_GET['movie'];

            $movie_title = $conn->real_escape_string($movie_title);

            $sql = "SELECT * FROM movies WHERE title = '$movie_title'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $movie = [
                    "title" => $row['title'],
                    "description" => $row['description'],
                    "image" => $row['img_path'] // Changed to 'img_path'
                ];
            }
        }
        $conn->close();

        if ($movie): 
    ?>
        <h2><?php echo $movie['title']; ?></h2>
        <?php if (!empty($movie['image'])): ?>
            <img src="<?php echo $movie['image']; ?>" alt="<?php echo $movie['title']; ?>">
        <?php endif; ?>
        <p><?php echo $movie['description']; ?></p>
    <?php else: ?>
        <p>Sorry, the movie information is not available.</p>
    <?php endif; ?>
</body>
</html>
