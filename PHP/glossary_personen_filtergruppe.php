    
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
            <li><a href="glossary_personen.php" class="active">Personen</a></li>
            <li><a href="glossary_grisha.php">Grisha</a></li>
        </ul>
    </div>
    <br>

    <!-- Filter verarbeiten -->
    <?php
        require_once "config.inc.php";

        $suchKriterienStr = "";

        if (is_null($_REQUEST["gruppe"])) {
            $gruppeSuche = "";
        } else {
            $gruppeSuche = $_REQUEST["gruppe"];
        }                                                

        /* Array mit Alphabet: so kann durch die Buchstaben iteriert und die Glosar-Ansicht beibehalten werden */
        $alph = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");

        /* gewählten Filter ausgeben */
        $filt =  mysqli_query($conn, "SELECT * FROM gruppen WHERE ID = '$gruppeSuche'");
        $f = $filt->fetch_assoc();
        echo "<div class='glossary-res'><h3>Personen der Gruppe " . $f['name'] . "</h3></div>";  

        /* Buchstaben-Navigation mit Links zu den jeweiligen Glossar-Einträgen */
        echo        
            "<div class='letters-bg'>
                <strong>
                    <a class='link' href='#personen_letter-A'>A</a> <a class='link' href='#personen_letter-B'>B</a> <a class='link' href='#personen_letter-C'>C</a> 
                    <a class='link' href='#personen_letter-D'>D</a> <a class='link' href='#personen_letter-E'>E</a> <a class='link' href='#personen_letter-F'>F</a> 
                    <a class='link' href='#personen_letter-G'>G</a> <a class='link' href='#personen_letter-H'>H</a> <a class='link' href='#personen_letter-I'>I</a> 
                    <a class='link' href='#personen_letter-J'>J</a> <a class='link' href='#personen_letter-K'>K</a> <a class='link' href='#personen_letter-L'>L</a> 
                    <a class='link' href='#personen_letter-M'>M</a> <a class='link' href='#personen_letter-N'>N</a> <a class='link' href='#personen_letter-O'>O</a> 
                    <a class='link' href='#personen_letter-P'>P</a> <a class='link' href='#personen_letter-Q'>Q</a> <a class='link' href='#personen_letter-R'>R</a> 
                    <a class='link' href='#personen_letter-S'>S</a> <a class='link' href='#personen_letter-T'>T</a> <a class='link' href='#personen_letter-U'>U</a> 
                    <a class='link' href='#personen_letter-V'>V</a> <a class='link' href='#personen_letter-W'>W</a> <a class='link' href='#personen_letter-X'>X</a> 
                    <a class='link' href='#personen_letter-Y'>Y</a> <a class='link' href='#personen_letter-Z'>Z</a>
                </strong>
            </div>
            <br>";
            
        
        /* gefiltertes Glossar */
        foreach ($alph as $i){
            
            $result = mysqli_query($conn, "SELECT personen.vorname, personen.nachname, personen.weitere_namen, 
            personen.geschlecht, personen.beschreibung, 
            gruppen.name as gruppe, 
            grisha.name as grisha,
            nationen.name as nation
            FROM personen
            JOIN gruppen on personen.gruppe = gruppen.ID
            JOIN grisha on personen.grisha_typ = grisha.ID
            JOIN nationen on personen.nation = nationen.ID
            WHERE personen.gruppe = '$gruppeSuche' AND personen.vorname LIKE '$i%' 
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
    ?>

    <!-- Option Filter zurücksetzen -->
    <br>
    <div class='glossary-res'>
        <form method='post' action='glossary_personen.php'>
            <input id='submit-button' type='submit' value='Filter zurücksetzen'/>
        </form>
    </div>


<?php include ("footer.inc.php"); ?>