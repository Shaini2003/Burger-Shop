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
function invalidUid($name){
    if(!preg_match("/^[a-zA-Z0-9]*$/",$name)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;

}
function invalidPhone($phone){
    if(!preg_match("/^[0-9]",$phone)){
        $result=true;

    }
    else{
        $result=false;
    }

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
function uidExists($conn,$email){
    

}