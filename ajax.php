<?php
include 'includes/dbh.inc.php';

?>

<!DOCTYPE html>
<html lang="eng" dir="ltr">
<head>  
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title class="title">GregorVrtichPHP</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"> </script>
   
   <script>
        $(document).ready(function() {
            var commentCount = 2;
            $("button").click(function() {
            commentCount = commentCount + 2;
            $("#comments").load("load-vlogs.php", {
            commentNewCount: commentCount
                });
            });
        });
    </script>
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

<body class="ajax">
    <h2>Da vam predstavim še uporabo AJAX programiranja!</h2>



<div id="comments"> 
    <?php 
    $sql = "SELECT naslov, vsebina, nick, datumObjave FROM vlog LIMIT 2";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
         while($row = mysqli_fetch_assoc($result)) {
            echo"<p>";
            echo $row['naslov'];
            echo"<br>";
            echo $row['vsebina'];
            echo"<br>";
            echo $row['datumObjave'];
            echo"<br>";
            echo $row['nick'];
            echo"</p>";
            echo"<br>";
     }
} else {
    echo "Ni objavljenih VLOGOV.";
}
?>
</div class="vecpodatkovdiv">

<button class="vecpodatkov">Več podatkov!</button>

<div><a class="naVrh" href="ajax.php">↑Na vrh↑</a> <br><br>
</body>
</html>

<?php 
include_once 'footer.php'
?>
