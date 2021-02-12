<?php
$username = $_POST["username"];
$email = $_POST["email"];

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
    <link rel="stylesheet" href="stylee.css">
    <title>TUGASWEB</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <a class="navbar-brand font font-weight-bold ml-auto mr-auto" href="#">WEBPROGRAMMING</a>
    </nav>
    <div id="error"></div>
    <div class="login-box">
        <h1>EDIT PROFILE</h1>
        <form action="edit.php" method="POST">
          <div class="textbox">
            <i class="fa fa-user" aria-hidden="true"></i><input class="form-control" id="username" name="username" value="">
        </div>
        <div class="textbox">
            
            <i class="fa fa-envelope" aria-hidden="true"></i><input type="text" placeholder="Email" name="email" value="">
        </div>
        <input type="submit" class="btn btn-success btn-block" name="submit" value="Submit" />
        </form>
    </div>
  </body>
</html>
