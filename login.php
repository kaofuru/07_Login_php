<?php
require './conection.php';
if(isset($_POST['login'])){
    $name=$_POST['name'];
    $password=$_POST['password'];
    $query="SELECT id FROM users where name='$name' and password='$password'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0) {
        $row=mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['id']=$row['id'];
        header('location:home.php');
    }else{
        echo "User not found!";
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
<style>
    form{
        height:270px;
    }
</style>

<body>
    <div class="form">
        <form action="" method="post">
            <div class="input-box">
                <input type="text" placeholder="Name" name="name">
            </div>

            <div class="input-box">
                <input type="text" placeholder="Password" name="password">
            </div>
            <div class="input-box">
                <input type="submit" name="login" value="login" >
            </div>
            <a href="./index.php">Don't have any account?<span>Sign up</span></a>
        </form>
    </div>
</body>
</html>