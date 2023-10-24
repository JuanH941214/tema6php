<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>6 ejercicio 1</h1>
<form action="tema6ejercicio1.php" method="post">
    Username: <input type="text" name="username" />
    Password: <input type="password" name="password" />
    <input type="submit" value="Login"/>
</form>
   <?php
  //$username=$GLOBALS['username'];
   //$password=$GLOBALS['password']; 

   if (isset($_POST['username'])){
    $username=$_POST['username'];
   }
   echo "$username ";

   if (isset($_POST['password'])){
    $password=$_POST['password'];
   }
   echo $password;



   ?> 
</body>
</html>