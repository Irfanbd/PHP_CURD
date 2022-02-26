<?php
$host="localhost";
$user_name="root";
$password="";
$dbname="connect_database";

$connect=mysqli_connect($host,$user_name,$password,$dbname);
if(isset($_POST['send'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $dept=$_POST['dept'];
    $query="INSERT INTO insert_data(name,email,phone,dept)
    VALUES('$name','$email','$phone','$dept')";
    mysqli_query($connect,$query);
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
        <input type="email" name="email" placeholder="email"><br><br>
        <input type="text" name="phone" placeholder="phone"><br><br>
        <select name="dept">
            <option>CSE</option>
            <option>EEE</option>
            <option>BBA</option>
            <option>CIVIL</option>
</select>
        <button name="send">save</button>
    </form>
</body>
</html>