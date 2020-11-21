<?php
session_start();
$con=mysqli_connect('localhost','root','','company');
//mysqli_select_db($con,'id8930489_spark');
$name1=$_SESSION['name'];
$q="select name from user where not name='$name1'";
$result=mysqli_query($con,$q);
//$var=$_POST['name'];

//echo $_SESSION['name'];
?>


<html>
<head>
   <title>
   viewUser details
    </title>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="view">
        <h1>Choose name To Tranfer Money</h1><hr>
        <form action="transfer.php" method="post" style="position: relative; left: 40%;">
       <table>
           <th><h2 style="color: Dodgerblue; font-size:30px; border-top: none; border-right: none; border-left: none; border-bottom:2px solid Dodgerblue;">Names In the List</h2></th>
           <?php  
     while($row = $result->fetch_assoc()) { ?>

        
   <tr>
       <td > <input style="width: 20px; height: 20px;" type="radio" name="transfer" value="<?php echo $row["name"]; ?>"><span style="color: white; font-size: 20px;"><?php echo $row["name"]; ?></span></td>
      
   </tr>
<?php }
  ?>
       <tr>
          
           <td><input class="button-style" style="font-size:20px; font-weight:bold;" type="submit" value="credit"></td>
           </tr>
        </table>
        </form>
        </div>
    </body>
</html>