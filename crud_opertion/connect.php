<?php

// $dp="mysql:host=localhost;dpname=curd_opertion";
// $con=new PDO($dp,'root','');

$con=new mysqli('localhost','root','','curd_opertion');

if(!$con){
    die(mysqli_error($con));

}


?>
