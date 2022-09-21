<?php

include 'connect.php';
?>


<!DOCTYPE html>
<html>

   <head>
   <link rel="stylesheet" href="display.css">
   </head>

   <body>

   <div>
    <button  style="margin: 30px 0 0 30px; background-color: #2C7AD6; 
    color: white; width: 70px; height: 30px;"><a href="user.php"
     style="color: white; text-decoration: none;">Add user</a></button>

<table class="table_display">
  <thead>
    <tr>
      <th scope="col">sl no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Opertion</th>
    </tr>
  </thead>
  <tbody>

  <?php

  $sql="select * from `curd`";
  $result=mysqli_query($con,$sql);
  if($result){
   
   while( $row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $name=$row['name'];
    $email=$row['email'];
    $mobile=$row['mobile'];
    $password=$row['password'];
    echo '
     
        <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$password.'</td>

      <td>

      <button style=" background:blue; width:50px;height:30px"> <a style="color: white; text-decoration: none;" 
      href="update.php?updateid='.$id.'
      " > Update</a></button>

      <button style=" background:red; width:50px;height:30px"><a  style="color: white; text-decoration: none;"
      href="delete.php?deletedid='.$id.'" > Delete</a></button>
    
      </td>
    </tr>';
   }
    
  }




  ?>
 

    
  </tbody>
</table>
   </div>

   </body>
</html>
