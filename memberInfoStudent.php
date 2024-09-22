<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Info</title>
    <script src="https://kit.fontawesome.com/664337fd0f.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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
          overflow: hidden;
      }
      .card{
        background-color: #181818;
        border: 3px #79FF82 solid;
        font-family: "Bungee", sans-serif;

        width: 75%;
        height: 75%;
        margin-top: 12vh;
        margin-left: auto;
        margin-right: auto;
      }
      .card h1{
        color: black;
        -webkit-text-stroke: 1px white;
        font-size: 90px;
        margin-top: 10px;
      }
      #pfp{
        border-radius: 20px;
      }
      #Name{
        color: black;
        -webkit-text-stroke: 1px white;
        font-size: 50px;
        margin-top: 30px;
      }
      #Email{
        color: black;
        -webkit-text-stroke: 1px white;
        font-size: 40px;
        margin-top: 40px;
      }
      #BackBtn{
        font-family: "Bungee", sans-serif;
        font-size: 40px;
        position: absolute;
        right: 15px;
        top: 15px;
      }
    </style>
</head>
<body>
<?php
include "config.php";

if(isset($_GET['member_id'])){
$get_id = $_GET['member_id'];

$currentMember = "SELECT * FROM tbl_members WHERE member_id='$get_id'";
$result = mysqli_query($conn, $currentMember);

while($row = mysqli_fetch_array($result)){
                if($row['active']==0){
                ?>
                <script>
                    alert('Position Is Vacant');
                    window.location.href='FacultyStudent.php';
                </script>
                <?php
                }else{
                ?>
                <!--Main Container For Admin Viewer-->
                <div class="card">
                <a href="FacultyStudent.php"><button class="btn btn-dark btn-outline-danger" type="submit" id="BackBtn">Back</button></a>
                  <center><h1><?php echo $row['member_position']?> </h1></center>
                  <input class="hidden" type="text" hidden name="id" value="<?php echo $row['member_id']  ?>"/>
                  <hr />
                  <div class="row" style="padding:10px;">

                    <div class="col-md-6 col-lg-6 col-sm-12">
                      <img id="pfp" src="<?php echo $row['member_pfp'];?>" width="100%" height="450px">
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                      <h2 id="Name"><b><?php echo $row['member_fname'].PHP_EOL.$row['member_mname'].PHP_EOL.$row['member_lname'];?></b></h2>
                      <br>
                      <h2 id="Email">Email: <b><?php echo $row['member_email'];?></b></h2>
                    </div>
                  </div>
                </div>
                <?php
                }
                ?>
  
<?php } } ?>  
          <!--Member Info End-->
</body>
</html>