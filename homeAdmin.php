<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCCS Organization Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/664337fd0f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<style> 
@import url('https://fonts.googleapis.com/css2?family=Bungee&display=swap');
    body {
    height: 100%;
    background-image: url('image/HomePageBG1Admin.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    }
    .navbar{
      font-family: "Bungee", sans-serif;
      background-color: rgb(24, 24, 24);
    }
    #currentUser{
      font-size: 25px;
      margin-left: 20px;
      color: white;
    }
    #navItems{
      margin-left: 38%;
    }
    #NavBTN{
      font-size: 1.5vw;
      color: black;
      -webkit-text-stroke: 1px white;
      border-radius: 15px;
      margin-left: 20px;
    }
    #NavBTN:hover{
      color: white;
      -webkit-text-stroke: transparent;
    
      transition: 0.5s ease-in-out;
    }
    .MainTitle{
      font-family: "Bungee", sans-serif;
      margin-left: 10vw;
      margin-top: 20vh;
    }
    .MainTitle h1{
      color: rgb(24, 24, 24);
      font-size: 8.5vw;
      -webkit-text-stroke: 5px #f0d853;
      margin-left: 10px;
      margin-top: 15px;
      line-height: 0.8;
    }
    .MainTitle p{
      color: black;
      -webkit-text-stroke: 1.5px white;
      font-size: 3vw;
      line-height: 1;
      margin-left: 20px;
    }
    .line{
      position: absolute;
      background-color: white;
      height: 40vh;
      width: 5px;
      margin-top: -10px;
    }
    #OCCSLogo{
      position: absolute;
      right: 7%;
      top: 25%;
    }
    </style>
<body>

<nav class="navbar navbar-expand-lg">
  <h1 class="navbar-brand"id="currentUser">Logged in as<span style="color:black; -webkit-text-stroke: 1px #f0d853; font-size:40px; margin-left: 10px;">Admin</span></h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Sidebar" aria-controls="Sidebar" aria-expanded="true" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="Sidebar">
    <div id="navItems" class="navbar-nav">
    <a class="nav-item nav-link" id="NavBTN" href="homeAdmin.php" style="color: white;-webkit-text-stroke: transparent;">HOME</a>
      <a class="nav-item nav-link" id="NavBTN" href="FacultyAdmin.php">FACULTY MEMBERS</a>
      <a class="nav-item nav-link" id="NavBTN" href="OfficersAdmin.php">STUDENT OFFICERS</a>

      <form action="logout.php"  method="post" style="margin-left: 2vw;">
        <button name="logout" id="LogoutBtn" class="btn btn-outline-danger w-100 py-2 my-2 "><i class="fa-solid fa-power-off"></i></button>
      </form>
    </div>
  </div>
</nav>

   
  <div class="MainTitle" id="MainTitle">
    <div class="line">
    </div>
    <p>WELCOME TO<br>OLIVAREZ COLLEGE</p>
    <h1>COMPUTER<br>STUDIES</h1>
  </div>
  <div id="OCCSLogo">
    <img src="image/OCCS.jpg" alt="OCCS Logo">
  </div>
</body>
</html>