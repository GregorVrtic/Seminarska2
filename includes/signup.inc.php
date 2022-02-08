<?php

if(isset($_POST["submit"])) {

$name = $_POST["name"];
$lastname = $_POST["lastname"];
$mail = $_POST["mail"];
$uid = $_POST["uid"];
$pwd = $_POST["pwd"];
$pwdrepeat = $_POST["pwdrepeat"];

require_once 'dbh.inc.php';   
require_once 'functions.inc.php'; 

if(emptyInputSignup($name, $lastname, $mail, $uid, $pwd, $pwdrepeat) !== false) {
    header("Location: ../signup.php?error=prazenvnos");
    exit();
}

if(invalidUid($uid) !== false) {
    header("Location: ../signup.php?error=napacenuporabnik");
    exit();
}

if(invalidEmail($mail) !== false) {
    header("Location: ../signup.php?error=napacenemail");
    exit();
}

if(pwdMatch($pwd, $pwdrepeat) !== false) {
    header("Location: ../signup.php?error=geslanistaista");
    exit();
}

if(uidExists($conn, $uid, $mail) !== false) {
    header("Location: ../signup.php?error=uporabnikobstaja");
    exit();
}

createUser($conn, $name, $lastname, $mail, $uid, $pwd);


} else {
    header("Location: ../signup.php");
    exit();
}