<?php
require 'config.php';

// Initialize signup and signin messages
$signup_message = '';
$signin_message = '';

// Sign Up Functionality
if(isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Validate inputs (you can add more validation if required)
    if(empty($username) || empty($email) || empty($password)) {
        $signup_message = "All fields are required.";
    } else {
        // Check if the username or email already exists
        $check_query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
        $check_result = $conn->query($check_query);
        if($check_result->num_rows > 0) {
            $signup_message = "Username or email already exists.";
        } else {
            // Insert user data into the database
            $insert_query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
            if($conn->query($insert_query) === TRUE) {
                // Redirect to the desired page upon successful sign up
                header("Location: cineTrackHomepage.php?username=" . urlencode($username));
                exit();
            } else {
                $signup_message = "Error: " . $conn->error;
            }
        }
    }
}

// Sign In Functionality
if(isset($_POST['signin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Validate inputs (you can add more validation if required)
    if(empty($username) || empty($password)) {
        $signin_message = "Both username and password are required.";
    } else {
        // Check if the user exists and password matches
        $signin_query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $signin_result = $conn->query($signin_query);
        if($signin_result->num_rows > 0) {
            // Redirect to the desired page upon successful sign in
            header("Location: cineTrackHomepage.php?username=" . urlencode($username));
            exit();
        } else {
            $signin_message = "Invalid username or password.";
        }
    }
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Sign In/Up CineTrack</title>
   <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
   <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>
   <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>
   <div class="container">
      <div class="c1">
         <div class="c11">
            <!-- <h1 class="mainhead">PICK YOUR SPOT</h1>
         <p class="mainp">Just click the buttons below to toggle between SignIn & SignUp</p> -->
         </div>
         <div id="left">
            <h1 class="s1class"><span>SIGN</span><span class="su">IN</span>
            </h1>
         </div>
         <div id="right">
            <h1 class="s2class"><span>SIGN</span><span class="su">UP</span></h1>
         </div>
      </div>
      <div class="c2">
         <form class="signup" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h1 class="signup1">SIGN UP</h1>
            <br><br><br><br>
            <input name="username" type="text" placeholder="Username*" class="username" />
            <input name="email" type="text" placeholder="Email*" class="username" />
            <input name="password" type="password" placeholder="Password*" class="username" />
            <button class="btn" name="signup">Get Started</button>
            <?php if (isset($signup_message))
               echo $signup_message; ?>
         </form>
         <form class="signin" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h1 class="signup1">SIGN IN</h1>
            <br><br><br><br>
            <input name="username" type="text" placeholder="Username*" class="username" />
            <input name="password" type="password" placeholder="Password*" class="username" />
            <button class="btn" name="signin">Sign In</button>
            <?php if (isset($signin_message))
               echo $signin_message; ?>
         </form>
      </div>
   </div>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
   <script src="assets/js/index.js"></script>
</body>

</html>