<?php
$serverName = "localhost";
$dbUsername = "Shaini2003";
$dbPassword = "shaini12@MT";
$dbName = "burger_shop_login";

$conn = mysqli_connect($serverName, $dbUsername,$dbPassword,$dbName);

if(!$conn){
    die("Connection failed : ".mysqli_connect_error());

}else{
    echo 'its working';
}