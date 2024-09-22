<?php 
session_start();
include('config.php');


if(isset($_GET['position'])){

    $member_position = $_GET['position'];

    
    $sql_remove = "UPDATE tbl_members SET
    member_fname = 'Vacant',
    member_mname = '',
    member_lname = '',
    member_email = '',
    member_pfp = 'Member_pfp/DefaultPFP.jpeg',
    active = 0
    WHERE member_position = '$member_position'";

    if($result_update = mysqli_query($conn, $sql_remove)){
    ?>

    <script>
        alert("Member Has beed Removed");
        window.location.href='FacultyAdmin.php';
    </script>

    <?php
    } else {
    
        if(!$result_update) {die('Unsucessful added'. mysqli_error()); }
    }

}
?>