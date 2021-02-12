<?php

require_once("koneksi.php");

if(isset($_POST['register'])){
    $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
    $password = password_hash($_POST["password"],PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username,email, password) VALUES(:username,:email,:password)";
    $stmt = $db->prepare($sql);

    $params = array(
        ":username"=> $username,
        ":email"=> $email,
        ":password"=> $password
    );
    $saved = $stmt->execute($params);
    if($saved)header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" 
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.min.css">
    <link rel="stylesheet" href="styleee.css">
    <title>TUGASWEB</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <a class="navbar-brand font font-weight-bold ml-auto mr-auto" href="#">WEBPROGRAMMING</a>
    </nav>
    <div class="login-box">
        <h1>REGISTER</h1>
        <form action="" method="POST">
        <div class="textbox">
            
            <i class="fa fa-user" aria-hidden="true"></i><input type="text" placeholder="Username" name="username" value="">
        </div>
        <div class="textbox">
            
            <i class="fa fa-user" aria-hidden="true"></i><input type="text" placeholder="Email" name="email" value="">
        </div>
        <div class="textbox">
            
            <i class="fa fa-lock" aria-hidden="true"></i><input type="password" placeholder="Password" name="password" value=""> 
        </div>
        <input type="submit" class="btn btn-success btn-block" name="register" value="Submit"/>
        </form>
    </div>
  </body>