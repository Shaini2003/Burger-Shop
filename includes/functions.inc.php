<?php
function emptyInputSignup($name,$phone,$email,$pwd,$pwdRepeat){
    if(empty($name) || empty($phone) || empty($email) || empty($pwd) || empty($pwdRepeat)) {
        $result =true;
    }
    else{
        $result=false;
    }
    return $result;
}
function invalidUid($email){
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;

}
function invalidPhone($phone) {
    
    $phoneNumberRegex = '/^\d{10}$/'; 

    if (!preg_match($phoneNumberRegex, $phone)) {
        $result=true;
    }else{
        $result=false;
    }

    return $result; 
}
function invalidName($name){
    if(!preg_match("/^[a-zA-Z0-9]*$/",$name)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}
function invalidEmail($email){
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;

}
function pwdMatch($pwd , $pwdRepeat){
    if($pwd !== $pwdRepeat){
        $result=true;
    }else{
        $result=false;
    }
    return $result;

}
function uidExists($conn,$name,$email){
    $sql= "SELECT*FROM users WHERE usersEmail= ? OR usersName= ?;";
    $stmt =mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"ss",$name,$email);
    mysqli_stmt_execute($stmt);
    $resultData= mysqli_stmt_get_result($stmt);
    if($row =mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        return false;
    }
    mysqli_stmt_close($stmt);
    

}
function createUser($conn,$name,$phone,$email,$pwd){
    $sql = "INSERT INTO users (usersName,usersPhone,usersEmail,usersPwd) VALUES (?,?,?,?);";
    $stmt =mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:../signup.php?error=stmtfailed");
        exit();
    }
    $hashedPwd =password_hash($pwd,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"ssss",$name,$phone,$email,$hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:../login.php?error=none");
    exit();
}

function emptyInputLogin($email,$pwd){
    if(empty($email) || empty($pwd)) {
        $result =true;
    }
    else{
        $result=false;
    }
    return $result;
}
function LoginUser($conn,$email,$pwd){
    $uidExists = uidExists($conn,$email,$email);
    if($uidExists === false){
        header("location:../signup.php?error=wronglogin");
        exit();
    }
    $pwdHashed= $uidExists["usersPwd"];
    $checkPwd =password_verify($pwd,$pwdHashed);
    if($checkPwd === false){
        header("location:../signup.php?error=wronglogin");
        exit();
    }
    else if($checkPwd === true){
        session_start();
        $_SESSION["userid"] =$uidExists["usersId"];
        $_SESSION["email"] =$uidExists["usersEmail"];
        header("Location:../Home.php");
        exit();
    }
}