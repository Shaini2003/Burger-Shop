<?php
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $phone=$_POST["phone"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $pwdRepeat =$_POST["confirm-password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $emptyInputs =emptyInputSignup($name,$phone,$email,$pwd,$pwdRepeat);
    $invalidUid = invalidUid($name);
    $invalidPhone =invalidPhone($phone);
    $invalidEmail = invalidEmail($email);
    $pwdMatch = pwdMatch($pwd , $pwdMatch);
    $uidExists =uidExists($conn,$name,$email);

    if ($emptyInputs !== false){
        header("Location:../signup.php?error=emptyinput");
        exit();
    }
    if ($invalidUid !== false){
        header("Location:../signup.php?error=invaliduid");
        exit();
    }
    if ($invalidPhone !== false){
        header("Location:../signup.php?error=invalidPhone");
        exit();
    }
    if ($invalidEmail !== false){
        header("Location:../signup.php?error=invalidEmail");
        exit();
    }
    if ($pwdMatch !== false){
        header("Location:../signup.php?error=passwordsdontmatch");
        exit();
    }
    if ($uidExists !== false){
        header("Location:../signup.php?error=nametaken");
        exit();
    }


}
else{
    header('location:../Login.php');
}