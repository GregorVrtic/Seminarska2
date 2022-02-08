<?php
include_once 'header.php'
?>

    <section class="signup.form">
        <h1 class="naslov">Vpiši se</h1>
        <div class="vpisni-obrazec">
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="name" placeholder="ime">
            <input type="text" name="lastname" placeholder="priimek">
            <input type="text" name="mail" placeholder="elektronski naslov">
            <input type="text" name="uid" placeholder="uporabniško ime">
            <input type="password" name="pwd" placeholder="geslo">
            <input type="password" name="pwdrepeat" placeholder="ponovite geslo">
        <button type="submit" name="submit">Potrdi</button>
        </form></div>

        <?php
    if(isset($_GET["Error"])) {
    if($_GET["Error"] == "prazenvnos") {
        echo"<p>Izpolnite vsa polja!</p>";
    }
    else if($_GET["Error"] == "napacenuporabnik") {
        echo"<p>Izberite drugo ime za uporabnika!</p>";
    }
    else if($_GET["Error"] == "napacenemail") {
        echo"<p>Pravilno vnesite elektronski naslov!</p>";
    }
    else if($_GET["Error"] == "geslanistaista") {
        echo"<p>Gesli nista enaki!</p>";
    }
    else if($_GET["Error"] == "uporabnikobstaja") {
        echo"<p>Uporabnik že obstaja, Prijavite se!</p>";
    }
    else if($_GET["Error"] == "stmtniuspela") {
        echo"<p>Prišlo je do napake, poskusite ponovno!</p>";
    }
    else if($_GET["Error"] == "none") {
        echo"<p>Uspešno ste se vpisali!</p>";
    }
}
?>
    </section>
       
<?php 
include_once 'footer.php'
?>