<?php

$servername ="localhost";
$dbUsername ="root";
$dbPasswor ="";
$dBName ="seminarska2";

$conn = mysqli_connect($servername,$dbUsername,$dbPasswor,$dBName) or die($conn->error);

if(isset($_GET['deleteid'])) {
    $id=$_GET['deleteid'];

    $sql="DELETE FROM crud WHERE crude_id=$id";
    $result=mysqli_query($conn, $sql);
    if($result) {
        header("Location: ../crude.php?uspesenvnos");
        exit();
       } else {die(mysqli_error($conn));
      }
}