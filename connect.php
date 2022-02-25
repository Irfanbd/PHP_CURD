<?php
$host="localhost";
$user_name="root";
$password="";
$dbname="connect_database";

$connect=mysqli_connect($host,$user_name,$password,$dbname);
if($connect){
    echo"database connect success";
}
else{
    echo"connection Failed";
}
?>