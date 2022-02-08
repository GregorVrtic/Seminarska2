<?php
include_once 'header.php';
require_once 'includes/pdo.inc.php';
?>

<body class="restapi">
    <h2 >Dobrodošli tukaj bom predstavil PHP REST API</h2>
    <p>Sintaksa QSL baze je nastavljena, da prikazuje samo zadnje tri objave: </p>
    <p>Katere so razvrščene po datumo-padajoče! </p>
    
<div>


<?php

$sql = $conn->prepare("SELECT naslov, vsebina, nick, datumObjave FROM vlog ORDER BY datumObjave DESC LIMIT 3;") ;
$sql->execute();
$tabelaDB = $sql->fetchAll(mode:PDO::FETCH_ASSOC);

echo"<pre>";
var_dump($tabelaDB);
echo"<pre>";

  ?>
</div> 
</body>

<?php 
include_once 'footer.php'
?>