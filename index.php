<?php

session_start();
if($_SESSION['loggedin']!=true){
  header("location:login.php");
}else{
echo" welcome". $_SESSION['sendusername'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" name="logout" value="logout">
    </form>
    <?php
    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
        header("location:login.php");
        
    }
    ?>
</body>
</html>