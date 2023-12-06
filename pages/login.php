<?php
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database connection
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "simple_attendance_db";

    $con = mysqli_connect($server, $username, $password, $dbname);

    if (!$con) {
        die("Connection to the database failed due to" . mysqli_connect_error());
    }

    // Retrieve user input
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Retrieve user data from the database
    $sql = "SELECT * FROM student WHERE email='$email' AND password='$password'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['id'];
        header("location:../index.php");
        exit();
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="bg1.jpg" alt="kasol chalo" class="bg">
    <div class="container">
        <h3>Login to Trainer Dashboard</h3>
        <form action="" method="post">
            <input type="email" name="email" placeholder="Enter Your email" required>
            <input type="password" name="password" placeholder="Enter your password" required>
            <button type="submit" class="btn">LOGIN</button>
        </form>
        <p>Don't have an account? <a href="signup.php" style="color: black;">Sign up here</a>.</p>

    </div>
    <script src="index.js"></script>
</body>
</html>