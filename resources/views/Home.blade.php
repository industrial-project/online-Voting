<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/Style/homeStyle.css"/>
    <script type="text/javascript" src="./Javascript/header.js"></script>
    <link rel="stylesheet" href="./css/Style/common.css">
    <title>Document</title>
</head>
      <body>
        <header class="head-area">
          <div class="header-container">
            <div class="logo">
              <h1><span>Ethio</span>Vote</h1>
            </div>
            <div class="mobile-nav">
              
              <button onclick="toggleMobileMenu()" class="hamburger-menu">menu</button>
            </div>
           
            <div class="menu">
              <ul class="menu1">
                <li><a href="#" class="active">Home</a></li>
                <li><div class="dropdown">
                  <button class="dropbtn">About</button>
                  <div class="dropdown-content">
                      <div class="dropdown-list"><a href="#">Ethiovote</a><br></div>                      
                      <div class="dropdown-list"><a href="#">Board</a></div>
                  </div>
                </div>
              </li>
                <li><a href="#" class="">Contact</a></li>
                <li><a href="#" class="">Announcement</a></li>
                <li><a href="/login" class="">Login</a></li>
              </ul>
               </div>
          </div>
          <div class="header-container">
          <div class="col-sm-12">
            <ul class="menu2 d-sm-none"  id="menu2" style="display: none;">
              <li><a href="#" class="active">Home</a></li>
              <li><a href="#" class="">About</a></li>
              <li><a href="#" class="">Contact</a></li>
              <li><a href="#" class="">Announcement</a></li>
              <li><a href="#" class="">Login</a></li>
              </ul>
          </div>
        </div>
        </header>

<!-- Introduction Section -->
<section>
  <div class="container">
    <div class="row">
      <div class="info">
        <p class="short-info">#Every vote counts</p>
        <h2 class="hero-heading">Participate in any election using your digital device</h2>
        <p class="hero-sub-heading">Ethiovote is an online voting enviroment where voters can cast their vote without any location limitation.</p>
       
            <button class="learn-more web-button">
          Learn More</button>
      </div>
      <div style=" background-blend-mode: multiply;" class="hero-image">
        <img src="./image/election2.jpg" class="img-fluid">
      </div>      
    </div>
  </div>
</section>

<section>
  <div><h2 align="center">About</h2>
  <p>Ethiovote </p></div>
  <div class="hero-image">
    <img src="./Image/home1.png" class="img-fluid">
    <img src="./Image/home1.png" class="img-fluid">
  </div>
</section>
</body>
</html>