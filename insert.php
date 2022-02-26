<?php
$host="localhost";
$user_name="root";
$password="";
$dbname="connect_database";

$connect=mysqli_connect($host,$user_name,$password,$dbname);
if($connect){
    
}
else{
    echo"connection Failed";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <form method="POST">
        <input type="text" name="name" placeholder="name"><br><br>
        <input type="text" name="email" placeholder="email"><br><br>
        <input type="text" name="phone" placeholder="phone"><br><br>
        <select name="dept">
            <option value="">CSE</option>
            <option value="">EEE</option>
            <option value="">BBA</option>
            <option value="">CIVIL</option><br>
</select>
        <button name="send">save</button>
    </form>
</body>
</html>