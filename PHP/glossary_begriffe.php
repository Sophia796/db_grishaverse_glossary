<?php 
$site_name = "Grishaverse-Datenbank: Begriffe";
include ("header.inc.php"); 
include ("navbar.inc.php");
?>

    <div>
        <h2>Begriffe</h2>
    </div>

    <div class="letters-bg">
        <strong>
            <a class="link" href="#letter-A">A</a> <a class="link" href="#letter-B">B</a> <a class="link" href="#letter-C">C</a> 
            <a class="link" href="#letter-D">D</a> <a class="link" href="#letter-E">E</a> <a class="link" href="#letter-F">F</a> 
            <a class="link" href="#letter-G">G</a> <a class="link" href="#letter-H">H</a> <a class="link" href="#letter-I">I</a> 
            <a class="link" href="#letter-J">J</a> <a class="link" href="#letter-K">K</a> <a class="link" href="#letter-L">L</a> 
            <a class="link" href="#letter-M">M</a> <a class="link" href="#letter-N">N</a> <a class="link" href="#letter-O">O</a> 
            <a class="link" href="#letter-P">P</a> <a class="link" href="#letter-Q">Q</a> <a class="link" href="#letter-R">R</a> 
            <a class="link" href="#letter-S">S</a> <a class="link" href="#letter-T">T</a> <a class="link" href="#letter-U">U</a> 
            <a class="link" href="#letter-V">V</a> <a class="link" href="#letter-W">W</a> <a class="link" href="#letter-X">X</a> 
            <a class="link" href="#letter-Y">Y</a> <a class="link" href="#letter-Z">Z</a>
        </strong>
    </div>
    <br>

    <?php

    $configs = include("config.inc.php");

    $alph = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q",
"R", "S", "T", "U", "V", "W", "X", "Y", "Z");

    foreach ($alph as $i){

        echo "<div id='letter-$i' class='big-letter'>" . $i . "</div>";

        $result = mysqli_query($conn, "SELECT begriffe.begriff, begriffe.beschreibung
        FROM begriffe
        WHERE begriffe.begriff LIKE '$i%'
        ORDER BY begriffe.begriff ASC");

        echo "<div class='glossary-bg'><ul>";

        while ($j = mysqli_fetch_assoc($result)) {
            echo "<li><h3>" . $j["begriff"] . "</li></h3>";
            echo $j["beschreibung"] . "<br><br>";
        }

        echo "</ul></div>";
    }

    ?>

    <br>
    <div class="letters-bg">
        <strong>
            <a class="link" href="#letter-A">A</a> <a class="link" href="#letter-B">B</a> <a class="link" href="#letter-C">C</a> 
            <a class="link" href="#letter-D">D</a> <a class="link" href="#letter-E">E</a> <a class="link" href="#letter-F">F</a> 
            <a class="link" href="#letter-G">G</a> <a class="link" href="#letter-H">H</a> <a class="link" href="#letter-I">I</a> 
            <a class="link" href="#letter-J">J</a> <a class="link" href="#letter-K">K</a> <a class="link" href="#letter-L">L</a> 
            <a class="link" href="#letter-M">M</a> <a class="link" href="#letter-N">N</a> <a class="link" href="#letter-O">O</a> 
            <a class="link" href="#letter-P">P</a> <a class="link" href="#letter-Q">Q</a> <a class="link" href="#letter-R">R</a> 
            <a class="link" href="#letter-S">S</a> <a class="link" href="#letter-T">T</a> <a class="link" href="#letter-U">U</a> 
            <a class="link" href="#letter-V">V</a> <a class="link" href="#letter-W">W</a> <a class="link" href="#letter-X">X</a> 
            <a class="link" href="#letter-Y">Y</a> <a class="link" href="#letter-Z">Z</a>
        </strong>
    </div>

<?php include ("footer.inc.php"); ?>