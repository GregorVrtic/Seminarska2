<?php 
include 'includes/dbh.inc.php';

$commentNewCount = $_POST['commentNewCount'];


$sql = "SELECT naslov, vsebina, nick, datumObjave FROM vlog LIMIT $commentNewCount";
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