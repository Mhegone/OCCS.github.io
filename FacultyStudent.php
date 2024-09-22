<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCCS Faculty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/664337fd0f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Bungee&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Jaro:opsz@6..72&display=swap');
      body {
          background-image: url('image/PlainBG1.jpg');
          background-size: cover;
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-position: center;
          margin: 0;
          padding: 0;
          height: 100vh;
      }
      
      .container {
        float: left;
        display: flex;
          flex-wrap: wrap;
          gap: 20px;
      }
      
      .card {
        font-family: "Jaro", sans-serif;
          background-color: rgb(24, 24, 24);
          border-radius: 8px;
          border: 3px #79FF82 solid;
          overflow: hidden;
          width: 100%;
          margin: 10px;
          padding: 20px;
      }
      .card a{
        text-decoration: none;
        display: flex;
        flex-direction: row;
        color: white;
      }
      #info{
        margin-left: 10px;
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
        margin-left: 25%;
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
      
        transition: 0.8s ease-out;
      }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
  <h1 class="navbar-brand"id="currentUser">Logged in as<span style="color:black; -webkit-text-stroke: 1px #79FF82; font-size:40px; margin-left: 10px;">Student</span></h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Sidebar" aria-controls="Sidebar" aria-expanded="true" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="Sidebar">
    <div id="navItems" class="navbar-nav">
    <a class="nav-item nav-link" id="NavBTN" href="homeStudent.php">HOME</a>
      <a class="nav-item nav-link" id="NavBTN" href="FacultyStudent.php" style="color: white;-webkit-text-stroke: transparent;">FACULTY MEMBERS</a>
      <a class="nav-item nav-link" id="NavBTN" href="OfficersStudent.php">STUDENT OFFICERS</a>

      <form action="logout.php" method="post" style="margin-left: 1vw;">
        <button name="back" class="btn btn-success w-100 py-2 my-2 " style=" font-size: 1vw">LOG IN AS ADMIN</button>
      </form>
    </div>
  </div>
</nav>
  

    
  <?php 
  include_once "config.php";

  $sql = "SELECT * FROM tbl_members";
  $result = $conn->query($sql);
  if($result->num_rows > 0){
    //output data out of tbl_members
    while($row = $result->fetch_assoc()){
        ?>
        <div class="col-lg-3 mb-4 container">
            <div class="card">
                <a href="memberInfoStudent.php?member_id=<?php echo $row['member_id']; ?>">
                    <img style="height: 200px; width: 200px; border-radius: 8px;" src="<?php echo $row['member_pfp']; ?>">
                        <div id="info">
                            <h4><?php echo $row['member_fname']; echo PHP_EOL;
                                  echo $row['member_mname'];echo PHP_EOL;
                                  echo $row['member_lname'];
                            ?></h4>
                            <h5><?php echo $row['member_position'] ?></h5>
                        </div>
                </a>
            </div>
        </div>
        <?php
    }
  }
   ?>  
</body>
</html>