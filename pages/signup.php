<?php
$insert=false;
    if(isset($_POST['name'])){
    $submit=true;
    $server="localhost";
    $username="root";
    $password="";
    
    $con=mysqli_connect($server,$username,$password);
    
    if(!$con){
    
        die("Connection to the database failed due to".mysqli_connect_error());
    
    }
    $name=$_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="INSERT INTO simple_attendance_db.student (name, age, email, password) VALUES ('$name', '$age', '$email', '$password')";
    
    
    
    if($con->query($sql)==true){
    
        $insert=true;
        
    }else{
        echo "Error: $sql <br> $con->error";
        
        $con->close();
    }
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chetu Trainer Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<img src="bg1.jpg" alt="kasoln chalo" class="bg">
    <div class="container">
        <h3>Welcome to Trainer Registration</h3>
        <!-- <p>Enter Your Details to join with us</p> -->
        <?php
        if($insert==true){
        echo "<p class='submitmsg'>Data Submitted</p>";
        }
        ?>
        
    <form action="" method="post">
    
        <input type="text" name="name" id="name" placeholder="Enter Your name ">
        <input type="text" name="age" id="age" placeholder="Enter your age eg@23">
        <input type="email" name="email" id="email" placeholder="Enter Your email">
        <input type="password" name="password" id="password" placeholder="Enter you pass">
         <button class="btn">SUBMIT</button>
         <button class="btn">RESET</button>

    
    </form>
    </div>
   <script src="index.js"></script>
    
</body>
</html>