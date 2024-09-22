<?php
include_once('auth.php');

 if(isset($_SESSION['username'])) {
    
    if(!isset($_SESSION['username'])){
      ?><script>
         alert('Access denied: Only for Admins');
            window.location.href='index.php';
      </script><?php
    }

 } else {
   ?><script>
         alert('Access denied: Only for Admins');
            window.location.href='index.php';
   </script><?php
 }