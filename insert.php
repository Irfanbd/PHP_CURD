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
    <title>CURD</title>
    <style>
        *{
            margin:0;
            padding:0;
                }
        .container{
    display: flex;
    justify-content: center;
    background: rgb(210,143,210);
background: linear-gradient(9deg, rgba(210,143,210,1) 0%, rgba(85,111,237,1) 100%);
    width: 80%;
    margin:  0 auto;
    height: 500px;
    align-items:center;
    text-align: center;
}
input{
    border:4px solid green;
    text-align:center;
    width:90%;
    padding: 10px 15px;
}
select{
    border:4px solid green;
    text-align:center;
    width:90%;
    padding: 10px 15px;
}
button{
    border:4px solid green;
    text-align:center;
    padding: 10px 15px;
    margin-top:10px;
}
    </style>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container">
    <form method="POST">
        <input type="text" name="name" placeholder="name"><br><br>
        <input type="email" name="email" placeholder="email"><br><br>
        <input type="text" name="phone" placeholder="phone"><br><br>
        <select name="dept">
            <option>CSE</option>
            <option>EEE</option>
            <option>BBA</option>
            <option>CIVIL</option>
</select><br>
        <button name="send">save</button>
    </form>




<!--Read Data-->

<table>
    <th>Name</th>
    <th>ID</th>
    <th>Department</th>
</table>
    <?php
$read="SELECT*FROM insert_data";
$query=mysqli_query($connect,$read);
while($row= mysqli_fetch_array($query)){?>

<tr>
    <td><?php echo?></td>
</tr>

<?php
    
}
    ?>


    </div>
</body>
</html>