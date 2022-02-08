<?php
include_once 'header.php'
 ?>


<!DOCTYPE html>
<html>
<head>
    <title class="profil">
    <section class="profile-intro">
    <?php if(isset($_SESSION["IME"])) {
                        echo "<p>Dobrodošli " . $_SESSION["IME"] . "</p>";
                      }
                      require_once 'dbh.inc.php';
     ?>
    </title>
</head>

   <body class="profil_body">
       <?php
        $sql = "SELECT * FROM vlog;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                   "<div>" ;
                    echo $row['naslov'] . "<br>";
                    echo $row['vsebina'] . "<br>";
                    echo $row['nick'] . "<br>";
                    echo $row['datumObjave'] . "<br>";
                    "</div>";

                }
            }
       ?>

   </body>




   </html>
<?php 
include_once 'footer.php'
?>