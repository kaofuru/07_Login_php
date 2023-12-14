<?php
require './conection.php';
if(isset($_POST['buttonSubmit'])){
    $name=$_POST['name'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="INSERT INTO users(name,lastName,email,password) VALUES('$name','$lastName','$email','$password')";
    $result=mysqli_query($con,$query);
    if ($result){
    echo 'User added!';
    }else{
        echo'User not added!';
    }

}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="form">
        <form action="" method="post">
            <div class="input-box">
                <input type="text" placeholder="Name" name="name">
            </div>
            <div class="input-box">
                <input type="text" placeholder="last name" name="lastName">
            </div>
            <div class="input-box">
                <input type="text" placeholder="Email" name="email">
            </div>
            <div class="input-box">
                <input type="text" placeholder="Password" name="password">
            </div>
            <div class="input-box">
                <input type="submit" name="buttonSubmit" value="submit" >
            </div>
            <a href="./login.php">Do you have any account ?<span> Sign in</span></a>
        </form>
    </div>
</body>
</html>