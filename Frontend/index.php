<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Racism</title>
    <link rel = "icon" href ="assets/image/logo/R.jpg" type = "image/x-icon">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <!-- #Scripts Start-->
    <script src="assets/dist/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/dist/jquery.nanogallery2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" type="text/javascript"script></script>
    <!-- #Scripts Stop-->
    <!-- #Css Start-->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
   <link href="assets/dist/css/nanogallery2.min.css" rel="stylesheet" type="text/css">
   <link href="assets/scripts/master.css" rel="stylesheet" type="text/css">
    <!-- #Css Stop-->
</head>
<body style="background-image: linear-gradient(rgb(46,44,83),#0A0A0A)">
    <!-- #Nav Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
          <a class="navbar-brand" href="index.html">
            <img src="assets/image/logo/logo.png" alt="..." height="75">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Memes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Slave Trading  </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Meme Categories
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">SFW</a></li>
                  <li><a class="dropdown-item" href="#">NSFW</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Offensive</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div style="border-style: solid; margin:1%; background-color:rgb(33, 37, 41); width: 45%; height: auto;">
      <h1 style="color:rgb(136, 136, 136);">Unfiltered Memes</h1>
      <img src="<?php echo $path . $img ?>"/>
      </div>
      <!-- #Nav Stop-->
    <!-- #Gallery Start-->
    <div id="nanogallery2" style="box-sizing: border-box; margin: 1%; "><script src="assets/scripts/jstst.js"></script></div>
    <!-- #Gallery Stop-->
    <!-- #Footer Start-->
    <footer class="footer-bs">
      <div class="row">
      <div class="col-md-3 footer-brand animated fadeInLeft">
      <img src="assets/image/logo/logo.png" style="width: 100%;; height: 60%;">
      <p>We are here to offend.</p>
      <p>Do you feel offended? Good, you should</p>
      </div>
      <div class="col-md-4 footer-nav animated fadeInUp">
      <div class="col-md-6">
      <ul class="pages">
      <li><a href="https://pbs.twimg.com/media/FJvLZlQXMAYkQVc.png">Got a problem?:<br> File a report</a></li>
      <li><a>Submit Memes: Discord Rando#6969</a></li>
      </ul>
      </div>
      <div class="col-md-6">
      <ul class="list">
      <li><a href="#">Email</a></li>
      <li><a href="#">FAQ</a></li>
      <li><a href="#">Copyright</a></li>
      </ul>
      </div>
      </div>
      <div class="col-md-2 footer-social animated fadeInDown">
      <h4>Follow Us</h4>
      <ul>
      <li><a href="https://www.youtube.com/channel/UCDGgc2wJpDofJZU7L01WboQ">Youtube</a></li>
      <li><a href="#">Twitter</a></li>
      </ul>
      </div>
      </footer>
    <!-- #Footer Stop-->
</body>
</html>
