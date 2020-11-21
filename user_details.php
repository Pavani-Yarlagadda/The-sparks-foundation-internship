<?php 
session_start();
$con=mysqli_connect('localhost','root','','company');
$name=$_POST['name'];
$q="select * from user where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$_SESSION['name']=$name;
//echo $_SESSION['name'];

?>
<html>
<head>
   <title>
   User info
    </title>
    <link rel="stylesheet" href="style.css">

</head>
    <body>
    <div class="view">
        <h2 style="color: white;">User Information</h2><hr>
       <table class="flat-table flat-table-1">
          
           <th>Name</th>
           <th>Email</th>
           <th>Credit</th>
           <tr>
           <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

           </tr>


        </table>

        </div>
        <br>
        <button class="button-style"><a href="view_user.php" class="button-link-style">Transfer To</a></button>
          <br>
        <button class="button-style"><a href="select_user.php" class="button-link-style">Go Back</a></button>
    </body>
</html>