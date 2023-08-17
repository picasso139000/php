<?php
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conn = mysqli_connect('localhost' , 'root' , '@mazingGalaxy1390' , 'crud_db');
    $qu = mysqli_query($conn, "SELECT * FROM `user` WHERE `email` = $email && `passwoed` = $password");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
    <input type="email" name="email" placeholder="Enter email">
    <input type="password" name="password" placeholder="Enter password">
    <input type="submit" value="login" name="login">
    </form>
</body>
</html>