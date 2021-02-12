<?php
require_once("koneksi.php");

if(isset($_POST['login'])){

  $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
  $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
  $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);

  $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
  $stmt = $db->prepare($sql);

  $params = array(
    ":username" => $username,
    ":email" => $email
  );
  $stmt->execute($params);
  $user = $stmt->fetch(PDO::FETCH_ASSOC);
  
  if($user){
    if(password_verify($password, $user["password"])){
      session_start();
      $_SESSION["user"] = $user;
      header("Location: halamanutama.php");
    }
  }
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
    <link rel="stylesheet" href="stylee.css">
    <title>TUGASWEB</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <a class="navbar-brand font font-weight-bold ml-auto mr-auto" href="#">WEBPROGRAMMING</a>
    </nav>
    <div id="error"></div>
    <div class="login-box">
        <h1>LOGIN</h1>
        <form action="" method="POST" onSubmit="return validasi(this)">
          <div class="textbox">
            <i class="fa fa-user" aria-hidden="true"></i><input class="form-control" id="username" name="username" type="text" placeholder="Username">
        </div>
        <div class="textbox">
            <i class="fa fa-envelope" aria-hidden="true"></i><input class="form-control" id="email" name="email" type="text" placeholder="Email">
        </div>
        <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true"></i><input class="form-control" id="password" name="password" type="password" placeholder="Password"> 
        </div>
        <input type="submit" class="btn btn-success btn-block" name="login" value="Login" />
        <div class="register">
            <a href="register.php">Register?</a>
        </div>
        </form>
    </div>
  </body>
  <script type="text/javascript">
function validasi(form){
  if (form.username.value == "" ){
    alert("Username masih kosong!");
    form.username.focus();
    return (false);
  }
  if (form.email.value == "" ){
    alert("Email masih kosong!");
    form.email.focus();
    return (false);
  }
  if (form.password.value == "" ){
    alert("Password masih kosong!");
    form.password.focus();
    return (false);
  }
return (true);
}
</script>

</html>
