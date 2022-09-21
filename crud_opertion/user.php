<?php

include 'connect.php';
if(isset($_POST['submit'])){
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];


    $sql="insert into `curd` (name,email,mobile,password)
    values('$name','$email','$mobile','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Data insert successfully";
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
    <input type="text" name="name" class="inputText" placeholder="Enter yourName"><br>


    <label for="">email</label>
    <input type="text" name="email" class="inputText" placeholder="Enter your Email"><br>


    <label for="">phone</label>
    <input type="text" name="mobile" class="inputText" placeholder="Enter your mobile number"><br>


    <label for="">Password</label>
    <input type="password" name="password" class="inputText" placeholder="Enter Yor Password"><br>

   
    <input type="submit" name="submit" value="submits" class="codeV">
    
    <input type="hidden" name="create" value="set">
    </form>
</body>
</html>