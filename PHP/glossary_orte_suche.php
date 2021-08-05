    
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
            <li><a href="glossary_orte.php" class="active">Orte</a></li>
            <li><a href="glossary_personen.php">Personen</a></li>
            <li><a href="glossary_grisha.php">Grisha</a></li>
        </ul>
    </div>
    <br>


    <!-- Suche verarbeiten -->
    <?php
        require_once "config.inc.php";

        $suchKriterienStr = "";

        if (is_null($_REQUEST["suchort"])) {
            $ortSuche = "";
        } else {
            $ortSuche = $_REQUEST["suchort"];
        }                                                

        /* Array mit Alphabet: so kann durch die Buchstaben iteriert und die Glosar-Ansicht beibehalten werden */
        $alph = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");

        /* Überprüfen, ob es Ergebnisse zur Suche gibt (wenn nicht: entsprechenden Text ausgeben; wenn ja: Suchstring und Ergebnis ausgeben) */
        $res = mysqli_query($conn, "SELECT * FROM schauplaetze WHERE schauplaetze.name = '$ortSuche'");

        if (mysqli_num_rows($res) < 1) {
            echo "<div class='glossary-res'><h3>Keine Ergebnisse für  " . $ortSuche . " gefunden</h3></div><br>";
        } else {
            echo "<div class='glossary-res'><h3>Suche nach " . $ortSuche . "</h3></div><br>"; 

            /* Suchergebnis */
            foreach ($alph as $i){
                
                $result = mysqli_query($conn, "SELECT schauplaetze.name, schauplaetze.beschreibung, 
                nationen.name AS nation
                FROM schauplaetze
                JOIN nationen on schauplaetze.nation = nationen.ID
                WHERE schauplaetze.name = '$ortSuche' AND schauplaetze.name LIKE '$i%'            
                ORDER BY schauplaetze.name ASC");

                if (mysqli_num_rows($result) >= 1) {        
                    echo "<div id='orte_letter-$i' class='big-letter'>" . $i . "</div>";
                }
        
                echo "<div class='glossary-bg'><ul>";
        
                while ($j = mysqli_fetch_assoc($result)) {
                    echo "<li><h3>" . $j["name"] . "</h3>";
        
                    if ($j["beschreibung"]) {
                        echo $j["beschreibung"] . "<br>";
                    }
        
                    echo "Nation: " . $j["nation"] . "<br><br>";
                }
        
                echo "</li></ul></div>";
            }
        }
    ?>

    <!-- Option Suche zurücksetzen -->
    <br>
    <div class='glossary-res'>
        <form method='post' action='glossary_orte.php'>
            <input id='submit-button' type='submit' value='Suche zurücksetzen'/>
        </form>
    </div>


<?php include ("footer.inc.php"); ?>