<?php
    session_start();
    isset($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <?php
        if(!isset($_SESSION['username'])){
           echo "<a class='btn' href='login.php'>Login</a>";
        }else{
           echo "<a class='btn' href='index.php'>Home</a>";
        }
        ?>
</body>
</html>