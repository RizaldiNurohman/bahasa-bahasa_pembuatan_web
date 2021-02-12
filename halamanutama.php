<?php require_once("auth.php"); ?>

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
    <link rel="stylesheet" href="style.css">
    <title>UASWEB</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <div class="container">
            
            <a class="navbar-brand font font-weight-bold" href="#">WEBPROGRAMMING</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mr-4">
                <li class="nav-item active">
                <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Hubungi kami <span class="sr-only">(current)</span></a>
                    </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Bantuan <span class="sr-only">(current)</span></a>
                    </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            </div class="icon mt-2">
                <i class="fas fa-bell ml-2"></i>
            </div>
          </button>
        </nav>
  
           <div class="row mt-5 no-gutters">
            <div class="col-md-2 bg-light">
                    <div class="card-body text-center">
                        <img class="img img-responsive rounded-circle mb-3" width="160" src="default.svg"/>
                        <h3><?php echo  $_SESSION["user"]["username"] ?></h3>
                          <form action="editprofil.php" method="POST">
                                <input type="hidden" name="username" value="<?php echo $username; ?>" />
                                <input type="hidden" name="email" value="<?php echo $email; ?>" />
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </form>
                        <p><a class="logout btn btn-primary mt-2" href="logout.php">Logout</a></p>
                    </div>
            </div>
            <div class="col-md-10">
                    <h4 class="text-center font-weight-bold m-4">Information</h4>
                    <div class="row mx-auto">
                        <div class="card mr-2 ml-2" style="width: 18rem;">
                            <img src="imgtugas/bbbb.png" class="card-img-top" alt="...">
                            <div class="card-body bg-light">
                              <h5 class="card-title">HTML</h5>
                              <p class="card-text">Hypertext Markup Language adalah bahasa markah standar untuk dokumen yang dirancang untuk ditampilkan di peramban internet. Ini dapat dibantu oleh teknologi seperti Cascading Style Sheets dan bahasa scripting seperti JavaScript dan VBScript.</p>
                              <button onclick="window.location.href='https://en.wikipedia.org/wiki/HTML'">Lebih Lanjut</button>
                            </div>
                        </div>
                        <div class="card mr-2 ml-2" style="width: 18rem;">
                            <img src="imgtugas/css.png" class="card-img-top" alt="...">
                            <div class="card-body bg-light">
                              <h5 class="card-title">CSS</h5>
                              <p class="card-text">Cascading Style Sheet merupakan aturan untuk mengatur beberapa komponen dalam sebuah web sehingga akan lebih terstruktur dan seragam. CSS bukan merupakan bahasa pemograman.</p>
                              <button onclick="window.location.href='https://id.wikipedia.org/wiki/Cascading_Style_Sheets'">Lebih Lanjut</button>
                            </div>
                        </div>
                        <div class="card mr-2 ml-2" style="width: 18rem;">
                            <img src="imgtugas/ddd.png" class="card-img-top" alt="...">
                            <div class="card-body bg-light">
                              <h5 class="card-title">JavaScript</h5>
                              <p class="card-text">JavaScript adalah bahasa pemrograman tingkat tinggi dan dinamis. JavaScript populer di internet dan dapat bekerja di sebagian besar penjelajah web populer seperti Google Chrome, Internet Explorer, Mozilla Firefox, Netscape dan Opera.</p>
                              <button onclick="window.location.href='https://id.wikipedia.org/wiki/JavaScript'">Lebih Lanjut</button>
                            </div>
                        </div>
                  </div>
  <footer class="fixed-bottom">
    <div class="navbar navbar-inverse navbar-light bg-warning navbar-fixed-bottom">
      <div class="container">
        <p>
          &#169; Copyright 18111145 Rizaldi Nurohman TIFRP18CID UASWEB1
        </p>
      </div>
    </div>
  </footer>
    
  </body>