<?php 
session_start();
class AdminAccount{
    private $adminUsername = "Admin1";
    private $adminPassword = "123";
    public $usernameUsed = "";
    public $passwordUsed = "";
    public function __construct($username, $password) {
        $this->usernameUsed = $username;
        $this->passwordUsed = $password;
    }

    public function authorize(){
        if($this->usernameUsed == $this->adminUsername AND $this->passwordUsed == $this->adminPassword){
            ?><script>
             alert('Login confirmed as ADMIN');
             window.location.href = 'homeAdmin.php';
            </script><?php
            $_SESSION['username'] = $this->usernameUsed;
        }else{
            ?><script>
             alert('Access denied');
             window.location.href='index.php';
            </script><?php
        }
    }
}

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $loginAttempt = new AdminAccount($username, $password);
    $loginAttempt->authorize();
}

?>