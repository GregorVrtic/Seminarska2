<?php
include_once 'header.php'
?>
<body>
    

<div>
    <section>
        <h1 class="naslov">Prijavi se</h1>
        <div class="prijavni-obrazec">
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Uporabnik ali email">
            <input type="password" name="pwd" placeholder="geslo">
            <button type="submit" name="submit">Prijavi me</button>
        </form></div>
        </div>
        <?php
    if(isset($_GET["Error"])) {
    if($_GET["Error"] == "prazenvnos") {
        echo"<p>Izpolnite vsa polja!</p>";
    }
    else if($_GET["Error"] == "napacnaprijava") {
        echo"<p>Napačna prijava!</p>";
    }   
    else if($_GET["Error"] == "none") {
        echo"<p>Uspešno ste se vpisali!</p>";
    }
}
?>
    </section>

    <div class="logindiv">
        <h2>Če želite vstopiti v našo bazo se prosim prijavite.</h2>
    <p>
        Povezava do pozabljenega gesla bo kmalu aktivna
        <a href="login.php">Pozabljeno geslo</a>
    </p>

    </div>
       
    </body>
<?php 
include_once 'footer.php'
?>