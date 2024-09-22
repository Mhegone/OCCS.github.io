<?php 
session_start();

if(isset($_POST['logout'])){
    if(session_destroy()){ //Destroy all Session
    ?>
    <script>
        alert("Logout Successful");
        window.location.href='index.php';
    </script>

    <?php
    }
mysqli_close($conn);

}
if(isset($_POST['back'])){//Destroy all Session
    ?>
    <script>
        window.location.href='index.php';
    </script>
    <?php
mysqli_close($conn);

}
?>