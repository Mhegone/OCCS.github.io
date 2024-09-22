<?php 
session_start();
include('config.php');


if(isset($_GET['position'])){

    $officer_position = $_GET['position'];

    
    $sql_remove = "UPDATE tbl_officers SET
    officer_fname = 'Vacant',
    officer_mname = '',
    officer_lname = '',
    officer_email = '',
    officer_pfp = 'Member_pfp/DefaultPFP.jpeg',
    active = 0
    WHERE officer_position = '$officer_position'";

    if($result_update = mysqli_query($conn, $sql_remove)){
    ?>

    <script>
        alert("Officer Has beed Removed");
        window.location.href='OfficersAdmin.php';
    </script>

    <?php
    } else {
    
        if(!$result_update) {die('Unsucessful added'. mysqli_error()); }
    }

}
?>