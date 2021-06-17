<?php 
$site_name = "Grishaverse-Datenbank: Begriffe";
include ("header.inc.php"); 
include ("navbar.inc.php");
?>

    <div>
        <h2>Personen</h2>
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

        $result = mysqli_query($conn, "SELECT *
        FROM personen
        WHERE personen.vorname LIKE '$i%' OR personen.nachname LIKE '$i%'
        ORDER BY personen.vorname ASC");

        $nation = mysqli_query($conn, "SELECT nationen.name FROM nationen 
        JOIN personen ON personen.nation = nationen.id
        WHERE personen.vorname LIKE '$i%' OR personen.nachname LIKE '$i%'
        ORDER BY personen.vorname ASC");

        $grisha = mysqli_query($conn, "SELECT grisha.grisha_typ, grisha.fähigkeit FROM grisha 
        JOIN personen ON personen.grisha_typ = grisha.id
        WHERE personen.vorname LIKE '$i%' OR personen.nachname LIKE '$i%'
        ORDER BY personen.vorname ASC");


        echo "<div class='glossary-bg'><ul>";

        while ($j = mysqli_fetch_assoc($result)) {

            echo "<li><h3>" . $j["vorname"] . " " . $j["nachname"] . "</li></h3>";

            if ($j["weitere_namen"]) {
                echo "Auch genannt: " . $j["weitere_namen"] . "<br>";
            }  

            echo $j["sonstiges"] . "<br>";

            /*

            if ($j["grisha_typ"]) {
                echo mysqli_fetch_assoc($grisha)["grisha_typ"] . ", Fähigkeit: " . mysqli_fetch_assoc($grisha)["fähigkeit"] . "<br>";
            }

            if ($j["nation"]) {
                echo "Nation: " . mysqli_fetch_assoc($nation)["name"] . "<br>";
            }
            */

            echo "<br><br>";
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