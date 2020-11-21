<?php
session_start();
$con=mysqli_connect('localhost','root','','company');
//mysqli_select_db($con,'test');
$q="select name from user";
$result=mysqli_query($con,$q);
//echo $_POST["transfer"];
$_SESSION['to']=$_POST["transfer"];
?>
<html>
<head>
   <title>
   Transfer money
    </title>
    <link rel="stylesheet" href="style.css">
   <style>
     
         input[type=text]
        { 
            margin-top: 5px;
            width:10em;
            height:2em;
            font-size:15px;
            border: 1px solid Dodgerblue;
            font-weight: bold;
        }
        input[type=submit]
        { 
            color:Dodgerblue;
            background-color: white;
            border-radius: 5px;
            border: 2px solid Dodgerblue;
            height:40px;
            width:100px;
            font-size: 20px;
        }
       
    </style>
    </head>
    <body>
     <form action="checkcredit.php" method="post"  style="position: relative; top:20%; ">
          <div class="view">
              <strong style="color: white;">Transfer Amount:</strong>
          <br>
            <br>
          <input class="text-style" type="text" name="transfer"><br>
          <br>
        
          <input type="submit">
        
        </div>
        </form>

        
    </body>
</html>