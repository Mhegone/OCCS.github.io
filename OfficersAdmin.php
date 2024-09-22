<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCCS Officers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/664337fd0f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Bungee&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Jaro:opsz@6..72&display=swap');
      body {
          background-image: url('image/PlainBG2Admin.jpg');
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
          border: 3px #f0d853 solid;
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
      #AddBtn{
        font-size: 25px;
        margin-left: 0.8vw;
      }
      #AddBtn:hover{
        transition: 0.5s ease-in-out;
      }
      #RemoveBTN{
        width: 35%;
        margin-bottom:15px;
        position: absolute;
        right: 10px;
        bottom: 0px;
      }
    </style>
</head>
<body>
    
<nav class="navbar navbar-expand-lg">
  <h1 class="navbar-brand"id="currentUser">Logged in as<span style="color:black; -webkit-text-stroke: 1px #f0d853; font-size:40px; margin-left: 10px;">Admin</span></h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Sidebar" aria-controls="Sidebar" aria-expanded="true" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="Sidebar">
    <div id="navItems" class="navbar-nav">
    <a class="nav-item nav-link" id="NavBTN" href="homeAdmin.php">HOME</a>
      <a class="nav-item nav-link" id="NavBTN" href="FacultyAdmin.php">FACULTY MEMBERS</a>
      <a class="nav-item nav-link" id="NavBTN" href="OfficersAdmin.php" style="color: white;-webkit-text-stroke: transparent;">STUDENT OFFICERS</a>
    </div>
    <div>
        <button type="button" name="addMember" id="AddBtn" class="btn btn-outline-success w-100 py-2 my-2" data-bs-toggle="modal" data-bs-target="#addMemberModal">
            Add Member
        </button>

        <!-- Modal -->
        <div class="modal fade" id="addMemberModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content" style="background-color: #181818; border: 3px solid #f0d853; width: 80%;">
              <div class="modal-header">
                <h1 class="modal-title" style="font-size: 40px;color: #7cd175;-webkit-text-stroke: 1px black;" id="exampleModalLabel">Add Student Officer</h1>
                <button type="button" class="close btn btn-danger" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
              </div>
              <div class="modal-body">
                <form action="AddOfficer.php" method="post" enctype="multipart/form-data">
                  <div class="row">
                      <!-- Member name -->
                      <div class="col-md-12">
                        <p style="font-size: 20px;-webkit-text-stroke: 1px black;color: #7cd175; margin-bottom: 0px;">FIRST NAME:</p>
                        <input type="text" id="floatingName" placeholder="First Name" name="Firstname" style="height: 60px; width: 90%; margin-left: 25px; font-size: 20px;" required>
                      </div>

                      <div class="col-md-12">
                        <p style="font-size: 20px;-webkit-text-stroke: 1px black;color: #7cd175; margin-bottom: 0px;">MIDDLE NAME:</p>
                        <input type="text" id="floatingName" placeholder="Middle Name/Initial" name="Middlename" style="height: 60px; width: 90%; margin-left: 25px; font-size: 20px;" required>
                      </div>

                      <div class="col-md-12">
                        <p style="font-size: 20px;-webkit-text-stroke: 1px black;color: #7cd175; margin-bottom: 0px;">LAST NAME:</p>
                        <input type="text" id="floatingName" placeholder="Last Name" name="Lastname" style="height: 60px; width: 90%; margin-left: 25px; font-size: 20px;" required>
                      </div>

                      <!-- Position Set -->
                      <div class="col-md-12">
                        <p style="font-size: 20px;-webkit-text-stroke: 1px black;color: #7cd175; margin-bottom: 0px;">POSITION:</p>
                        <select id="position" class="form-control mb-3" name="Position" style="height: 60px; width: 90%; margin-left: 25px; font-size: 20px;" required>
                            <option value="Unchosen">CHOOSE POSITION</option>
                            <option value="President">PRESIDENT</option> 
                            <option value="VicePresident(internal)">VICE PRESIDENT(INTERNAL)</option>
                            <option value="VicePresident(external)">VICE PRESIDENT(EXTERNAL)</option>
                            <option value="Secretary">SECRETARY</option>
                            <option value="Auditor">AUDITOR</option>
                            <option value="Treasurer">TREASURER</option>
                            <option value="PRO">P.R.O.</option>
                            <option value="GraphicDesigner">GRAPHIC DESIGNER</option>
                            <option value="ProjectManager1">PROJECT MANAGER 1</option>
                            <option value="ProjectManager2">PROJECT MANAGER 2</option>
                            <option value="ProjectManager3">PROJECT MANAGER 3</option>
                        </select>
                      </div>
                      <!-- Email -->
                      <div class="col-md-12">
                        <p style="font-size: 20px;-webkit-text-stroke: 1px black;color: #7cd175; margin-bottom: 0px;">EMAIL ADDRESS</p>
                        <input type="Email" id="floatingName" placeholder="Email" name="Email" style="height: 60px; width: 90%; margin-left: 25px; font-size: 20px;" required>
                      </div>
                      <!-- File Upload For Profile -->
                      <div class="col-md-12">
                        <p style="font-size: 20px;-webkit-text-stroke: 1px black;color: #7cd175; margin-bottom: 0px;">PROFILE IMAGE</p>
                        <input type="file" class="form-control" id="floatingName" name="MemberPFP" accept="image/*" style="height: 60px; width: 90%; margin-left: 25px; font-size: 20px;" required>
                      </div>
                    <button style="margin-top: 20px; -webkit-text-stroke: 1px black;color: black;font-size: 30px;background-color: #7cd175;border: 3px solid black;" class="btn w-100 py-2" type="submit" name="add">ADD OFFICER</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

    </div>
  </div>
</nav>  

  <?php 
  include_once "config.php";

  $sql = "SELECT * FROM tbl_officers";
  $result = $conn->query($sql);
  if($result->num_rows > 0){
    //output data out of tbl_members
    while($row = $result->fetch_assoc()){
        ?>
        <div class="col-lg-3 mb-4 container">
            <div class="card">
                <a href="officerInfoAdmin.php?member_id=<?php echo $row['member_id']; ?>">
                    <img style="height: 200px; width: 200px;border-radius: 8px;" src="<?php echo $row['officer_pfp']; ?>">
                        <div id="info">
                            <h4><?php echo $row['officer_fname']; echo PHP_EOL;
                                  echo $row['officer_mname'];echo PHP_EOL;
                                  echo $row['officer_lname'];
                            ?></h4>
                            <h5><?php echo $row['officer_position'] ?></h5>
                        </div>
                    <a href="RemoveOfficer.php?position=<?php echo $row['officer_position']; ?>" onclick="return confirm('Are you sure you want to remove this member?');"><button class="btn btn-outline-danger" id="RemoveBTN">Remove Member</button></a>
                </a>
            </div>
        </div>
        <?php
    }
  }
   ?>  
</body>
</html>