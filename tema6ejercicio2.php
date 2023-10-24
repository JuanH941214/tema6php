<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>6 ejercicio 2</h1>
    <form action="tema6ejercicio2.php" method="post">
        Username: <input type="text" name="username" />
        <input type="submit" value="Login" />
    </form>
    <?php
    $username = $_POST['username'];
    if (isset($_SESSION['userLogged'])) {
        $_SESSION['userLogged'] = " Bienvenido " . $username;
        echo $_SESSION['userLogged'];
    }


    ?>
</body>

</html>