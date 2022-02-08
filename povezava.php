<?php

$servername ="localhost";
$dbUsername ="root";
$dbPasswor ="";
$dBName ="seminarska2";

$conn = mysqli_connect($servername,$dbUsername,$dbPasswor,$dBName); 

if(!$conn) {

    die("povezava ni uspela: " . mysqli_connect_error());
}