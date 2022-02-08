<?php 

function emptyInputSignup($name, $lastname, $mail, $uid, $pwd, $pwdRepeat) {
    $result;
    if(empty($name) || empty($lastname) || empty($mail) || empty($uid) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($uid) {
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $uid)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($mail) {
    $result;
    if(!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
    $result;
    if($pwd !== $pwdRepeat) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $uid, $mail) {
    $sql = "SELECT * FROM uporabniki WHERE usernickname = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=stmtniuspela");
        exit();
    } 
    mysqli_stmt_bind_param($stmt, "ss", $uid, $mail);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    
    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $lastname, $mail, $uid, $pwd) {
    $sql = "INSERT INTO uporabniki (ime, priimek, email, usernickname, geslo) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=vnosuporabnikaniuspel");
        exit();
    } 

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $name, $lastname, $mail, $uid, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("Location: ../login.php?uspesnosteseprijavili");
    exit();  
}
function emptyInputLogin($uid, $pwd) {
    $result;
    if(empty($uid) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $uid, $pwd) {
    $uidExists = uidExists($conn, $uid, $uid);

    if($uidExists === false) {
        header("Location: ../login.php?napacenemail");
        exit();  
    }
    $pwdHashed = $uidExists["geslo"];
    $checkPwd = password_verify($pwd, $pwdHashed);
    if($checkPwd === false) {
        header("Location: ../login.php?napacnogeslo");
        exit();  
    } 
     else if ($checkPwd === true) {
        session_start();
        $_SESSION["ID"] = $uidExists["uporabnik_id"];
        $_SESSION["IME"] = $uidExists["usernickname"];
        header("Location: ../index.php");
        exit();  
    }
}
