<?php
include 'header.php'
?>

    <section class="index-intro">
    <?php if(isset($_SESSION["IME"])) {
                        echo "<p>Dobrodošli " . $_SESSION["IME"] . "</p>";
                      }
                      ?>
     </section>

    <body class="body">
    <div class="container">
        
      </div>
            </div>
             <h1 class="naslov">Spletna stran predstavlja seminarsko nalogo za predmet SP 2</h1>        
                <table style="width:100%"  class="table-index">
                <tbody>
                    <tr class="tr-table-naslov" style="margin-top:0;">

                        <td><div style="background-color:grey;color:white;padding:20px;">
                          <h2>DB</h2>
                            <p>Pri seminarski sem uporabljal DB na LOCALHOST/ in je priložena v datoteki z naslovom Seminarska/DB.</p>
                            <p>Zadeva sem z isto podatkovno bazo sestavil tudi na wardspace.net in deluje .</p>
                            </div></td>
                        <td><div style="background-color:grey;color:white;padding:20px;">
                            <h2>AJAX</h2>
                            <p>Za testiranje AJAX-a sem ustvaril tabelo z "VLOGI". Stran prikazuje zadnji dve objavi.</p>
                            <p>Pri tem sem utvaril SKRIPTO, katera se po zahtevi uporabnika poveže v DB, ter z uporabo gumba dodatno naloži komentarje.</p>
                            <p>Baza z tabelo je prav tako priložena v Seminarska/DB. </p>
                            </div> </td>
                        <td><div style="background-color:grey;color:white;padding:20px;">
                            <h2>REST API</h2>
                            <p>Za rest api sem uporabil z povezavo PDO, ter uporabil podatke iz iste baze kot z AJAX-om, vendar brez skripte za dodajanje vlogov.</p>
                            <p>Uorabnik se ob obisku le poveže do baze, katera mu pokaže zadnje tri objave, padajoče po datumu.</p>
                            </div></td></tr>
                         
                    </tbody>
                    <tfoot>
                    <tr class="tr-table-naslov" style="margin-top:0;">
                         <td><div  style="background-color:grey;color:white;padding:20px;">
                            <h2>VPIS</h2>
                            <p>Pri tem sem v DB ustvaril tabelo uporabniki, katera je shranila željene podatke.</p>
                            <p>Ob tem sem napisal tudi nekaj funkcij, katere preverjajo, če uporabnik že obstaja, če je ponovno vnešeno geslo enako geslu
                                in vključeno funkcijo za heširanje gesel, katera shranjuje  heširana gesla v tabelo.</p>
                            </div> </td>
                        <td><div  style="background-color:grey;color:white;padding:20px; margin-top: 0;">
                            <h2>PRIJAVA</h2>
                            <p>Ob vpisu/prijavi v bazo uporabnikov, sem opravil funkcijo, katera v bazi preveri, če je uporabnik že obstaja.</p>
                            <p>Po uspešnem vpisu pričnemo z SESSION, ter imamo dostop do profila, katerega moram še obdelati. Ta del naloge bi potreboval, še vunkcijo za obnovo 
                                ali ponastavitev gesla, katere mi pa še ni uspelo narediti.</p>
                            </div> </td>
                        <td><div style="background-color:grey;color:white;padding:20px;">
                            <h2>CRUDE</h2>
                            <p>V isti podatkovni bazi sem ustvaril preprosto tabelo CRUD, katera beleži podatke ob vpisu v zavihku CRUD.</p>
                            <p>NPo vnosu podatkov lahko podatke enostavno manipuliramo z urejanjem ali izbrisom iz baze.</p>
                            </div> </td></tr>
                    </tfoot>
                </table>
                <br>
                <br>
            
            <section>
                <div class="nekavsebina">
                <h2 class="naslov">By Gregor Vrtič, št. 35200098</h2>

    </div>
    </section>

    </body>

    <?php 
    include_once 'footer.php'
    ?>
