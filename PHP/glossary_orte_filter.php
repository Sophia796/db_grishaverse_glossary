    
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

    <!-- Filter verarbeiten -->
    <?php
        require_once "config.inc.php";

        $suchKriterienStr = "";

        if (is_null($_REQUEST["nation"])) {
            $nationSuche = "";
        } else {
            $nationSuche = $_REQUEST["nation"];
        }                                                

        /* Array mit Alphabet: so kann durch die Buchstaben iteriert und die Glosar-Ansicht beibehalten werden */
        $alph = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");

        /* gewählten Filter ausgeben */
        $filt =  mysqli_query($conn, "SELECT * FROM nationen WHERE ID = '$nationSuche'");
        $f = $filt->fetch_assoc();

        if ($f['name'] == 'Suli') {
            echo "<div class='glossary-res'><h3>" .  $f['name'] . "</h3>";
            echo "<p>Das Volk der Suli lebt nommadisch im Westen von Ravka.</p><p>Tipp: Um Orte anzeigen zu lassen, filtern Sie nach 'Ravka'. </p></div><br>"; 
        } else {
            echo "<div class='glossary-res'><h3>" . $f['name'] . "</h3></div>";  

            /* Buchstaben-Navigation mit Links zu den jeweiligen Glossar-Einträgen */
            echo        
            "<div class='letters-bg'>
                <strong>
                    <a class='link' href='#orte_letter-A'>A</a> <a class='link' href='#orte_letter-B'>B</a> <a class='link' href='#orte_letter-C'>C</a> 
                    <a class='link' href='#orte_letter-D'>D</a> <a class='link' href='#orte_letter-E'>E</a> <a class='link' href='#orte_letter-F'>F</a> 
                    <a class='link' href='#orte_letter-G'>G</a> <a class='link' href='#orte_letter-H'>H</a> <a class='link' href='#orte_letter-I'>I</a> 
                    <a class='link' href='#orte_letter-J'>J</a> <a class='link' href='#orte_letter-K'>K</a> <a class='link' href='#orte_letter-L'>L</a> 
                    <a class='link' href='#orte_letter-M'>M</a> <a class='link' href='#orte_letter-N'>N</a> <a class='link' href='#orte_letter-O'>O</a> 
                    <a class='link' href='#orte_letter-P'>P</a> <a class='link' href='#orte_letter-Q'>Q</a> <a class='link' href='#orte_letter-R'>R</a> 
                    <a class='link' href='#orte_letter-S'>S</a> <a class='link' href='#orte_letter-T'>T</a> <a class='link' href='#orte_letter-U'>U</a> 
                    <a class='link' href='#orte_letter-V'>V</a> <a class='link' href='#orte_letter-W'>W</a> <a class='link' href='#orte_letter-X'>X</a> 
                    <a class='link' href='#orte_letter-Y'>Y</a> <a class='link' href='#orte_letter-Z'>Z</a>
                </strong>
            </div>
            <br>";
        }

        foreach ($alph as $i){
            
            $result = mysqli_query($conn, "SELECT schauplaetze.name, schauplaetze.beschreibung, 
            nationen.name AS nation
            FROM schauplaetze
            JOIN nationen on schauplaetze.nation = nationen.ID
            WHERE schauplaetze.nation = '$nationSuche' AND schauplaetze.name LIKE '$i%'                     /* entspricht der gewählten Option und beginnt mit dem entsprechenden Buchstaben */
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
    ?>

    <!-- Option Suche zurücksetzen -->
    <br>
    <div class='glossary-res'>
        <form method='post' action='glossary_orte.php'>
            <input id='submit-button' type='submit' value='Filter zurücksetzen'/>
        </form>
    </div>


<?php include ("footer.inc.php"); ?>