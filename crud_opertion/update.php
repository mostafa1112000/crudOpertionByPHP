<?php

include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `curd` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];


if(isset($_POST['submit'])){
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];


    $sql="update `curd` set id='$id' ,name='$name',
    email='$email',mobile='$mobile',
    password='$password' where id=$id  ";
    
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Updatee successfully";
    }else{
        die(mysqli_error($con));
    }

}




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main2.css">
</head>


<body>
    <form  method="post">


   
    <label for="">Name</label>
    <input type="text" name="name" class="inputText" placeholder="Enter yourName"
     value=<?php echo $name ?>><br>


    <label for="">email</label>
    <input type="text" name="email" class="inputText" placeholder="Enter your Email"
    value=<?php echo $email ?>><br>


    <label for="">phone</label>
    <input type="text" name="mobile" class="inputText" placeholder="Enter your mobile number"
    value=<?php echo $mobile ?>><br>


    <label for="">Password</label>
    <input type="password" name="password" class="inputText" placeholder="Enter Yor Password"
    value=<?php echo $password ?>><br>

   
    <input type="submit" name="submit" value="Update" class="codeV">
    
    <input type="hidden" name="create" value="set">
    </form>
</body>
</html>