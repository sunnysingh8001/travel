<?php
$insert = false;
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
   die("connection to this database failed due to ". mysqli_connect_error()); 
}
$name = $_POST['name'];
$gender = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];
$sql = "INSERT INTO `usa`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `decs`, `Date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";


if($con -> query($sql) == true){
    $insert = true;
}
else{
    echo "ERROR : $sql <br> $con-> error";
}
$con -> close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="img.jpeg" alt="USA">
    <div class="container">
        <h1>Welcome to Our Trip</h1>
        <p>Enter your details here and submit for this Trip</p>
        <?php
            if($insert == true){
                echo "<p class='submsg'> Thanks For Submitting your Form, We are Happy to see you in our Trip </p>";
            }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="text" name="age" id="age" placeholder="Enter Your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter Your Gender">
            <input type="email" name="email" id="email" placeholder="Enter Your E-mail">
            <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone Number">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter Yourr Extra Details"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
</body>
</html>
