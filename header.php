<?php
session_start();
?>

<!DOCTYPE html>
<html lang="eng" dir="ltr">
<head>  
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title class="title">GregorVrtichPHP</title>
    <link rel="stylesheet" href="css/style.css">
    
   
</head>

    <nav>
        <div class="wrapper">
                <a href="index.php">
                    <img src="img/LogoVrtich.svg" alt="Blogs_logo">
                <ul class="navigation">
                    <li><a href="index.php">Domov</a></li>
                    <li><a href="ajax.php">Ajax</a></li>
                    <li><a href="restapi.php">Rest Api</a></li> 
                    <?php 
                    if(isset($_SESSION["IME"])){
                        echo"<li><a href='profile.php'>Profile page</a></li>";
                        echo"<li><a href='includes/logout.inc.php'>Log out</a></li>";
                    } else {
                      echo "<li><a href='signup.php'>Vpis</a></li>";
                      echo "<li><a href='login.php'>Prijava</a></li>";
                    }
                    ?>    
                    <li><a href="crude.php">Crude</a></li>       
                                         
                </ul>
        </div>    
    </nav>
</html>