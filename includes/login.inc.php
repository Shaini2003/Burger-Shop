<?php
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $pwd = $_POST["password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($email, $pwd) !== false){
        exit();
    }
    LoginUser($conn,$email,$pwd);

}
else{
    header('location:../Login.php');
    exit();
}