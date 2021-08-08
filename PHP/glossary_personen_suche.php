    
<?php 
$site_name = "Grishaverse-Datenbank: Glossar";
include ("header.inc.php"); 
include ("navbar.inc.php");
$configs = include("config.inc.php");
?>
    <div>
        <h2>Glossar</h2>
    </div>

    <!-- Glossar-Navigationsleiste -->
    <div class="glossary-nav">
        <ul>
            <li><a href="glossary_begriffe.php">Begriffe</a></li>
            <li><a href="glossary_orte.php">Orte</a></li>
            <li><a href="glossary_personen.php"  class="active">Personen</a></li>
            <li><a href="glossary_grisha.php">Grisha</a></li>
        </ul>
    </div>
    <br>


    <!-- Suche verarbeiten -->
    <?php
        require_once "config.inc.php";

        $suchKriterienStr = "";

        if (is_null($_REQUEST["suchperson"])) {
            $personSuche = "";
        } else {
            $personSuche = $_REQUEST["suchperson"];
        }                                                

        /* Array mit Alphabet: so kann durch die Buchstaben iteriert und die Glosar-Ansicht beibehalten werden */
        $alph = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");

        /* Überprüfen, ob es Ergebnisse zur Suche gibt (wenn nicht: entsprechenden Text ausgeben; wenn ja: Suchstring und Ergebnis ausgeben) */
        $res = mysqli_query($conn, "SELECT * FROM `personen` WHERE personen.vorname = '$personSuche' 
        OR personen.nachname = '$personSuche' OR personen.namegesamt = '$personSuche' OR personen.weitere_namen LIKE '%$personSuche%'");

        if (mysqli_num_rows($res) < 1) {
            echo "<div class='glossary-res'><h3>Keine Ergebnisse für  " . $personSuche . " gefunden</h3>
            <p>Glossar-Eintrag hinzufügen? <a class='link' href='contact.php'>Kontaktieren Sie uns!</a></p></div><br>";
        } else {
            echo "<div class='glossary-res'><h3>Suche nach " . $personSuche . "</h3></div><br>"; 

            /* Suchergebnis */
            foreach ($alph as $i){

                $result = mysqli_query($conn, "SELECT personen.vorname, personen.nachname, personen.weitere_namen, 
                personen.geschlecht, personen.gruppe, personen.beschreibung, 
                gruppen.name as gruppe, 
                grisha.name as grisha,
                nationen.name as nation
                FROM personen
                JOIN gruppen on personen.gruppe = gruppen.ID
                JOIN grisha on personen.grisha_typ = grisha.ID
                JOIN nationen on personen.nation = nationen.ID
                WHERE personen.vorname = '$personSuche' AND personen.vorname LIKE '$i%'  
                OR personen.nachname = '$personSuche' AND personen.vorname LIKE '$i%'
                OR personen.namegesamt = '$personSuche' AND personen.vorname LIKE '$i%'
                OR personen.weitere_namen LIKE '%$personSuche%' AND personen.vorname LIKE '$i%'
                ORDER BY personen.vorname ASC");
    
                if (mysqli_num_rows($result) >= 1) {        
                    echo "<div id='personen_letter-$i' class='big-letter'>" . $i . "</div>";
                }
    
                echo "<div class='glossary-bg'><ul>";
    
                while ($j = mysqli_fetch_assoc($result)) {
                    echo "<li><h3>" . $j["vorname"] . " " . $j["nachname"] . "</h3><uo>";
                    if ($j["weitere_namen"]) {
                        echo "<li>Auch genannt: " . $j["weitere_namen"] . "</li>";
                    }
                    if ($j["beschreibung"]) {
                        echo "<li>". $j["beschreibung"] . "</li>";
                    }
                    if ($j["gruppe"] != "Keine Gruppe/unbekannt") {
                        echo "<li>Gruppe: " . $j["gruppe"] . "</li>";
                    }
                    if ($j["grisha"] != "Kein Grisha") {
                        echo "<li>Grishatyp: " . $j["grisha"] . "</li>";
                    } 
                    if ($j["nation"] != "Keine Nation/unbekannt") {
                        echo "<li>Nation: " . $j["nation"] . "</li>";
                    } 
                    echo "</uo></li><br>";
                }
                echo "</ul></div>";
            }
        }
    ?>

    <!-- Option Suche zurücksetzen -->
    <br>
    <div class='glossary-res'>
        <form method='post' action='glossary_personen.php'>
            <input id='submit-button' type='submit' value='Suche zurücksetzen'/>
        </form>
    </div>


<?php include ("footer.inc.php"); ?>