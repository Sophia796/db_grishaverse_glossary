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
            <li><a href="glossary_personen.php">Personen</a></li>
            <li><a href="glossary_grisha.php" class="active">Grisha</a></li>
        </ul>
    </div>
    <br>

    <!-- Grisha Orden Guide --> 
    <div><h3>Grisha-Orden</h3></div>
    <div class='flex-container'>
            <div class='item3'>
                <h2 style='margin-left: 0px'>Korporalki</h2>
                <h4 style='margin-left: 0px'>Orden der Lebenden und der Toten</h4>
                <p style='text-align: center'>Fähigkeit: Beherrschen des Körpers</p>
                <p style='text-align: center'>Keftafarbe: rot</p>
                <uo style='list-style-type: none'>
                    <li>
                        <div class='myDIV'><b>Entherzer</b></div>
                        <div class='hide'>Ausbildung zum Kampf</div>                                <!-- erscheint bei Mouse Hover -->
                    </li>
                    <li>
                        <div class='myDIV'><b>Heiler</b></div>
                        <div class='hide'>Heilen von Verletzungen</div>
                    </li>
                    <li>
                        <div class='myDIV'><b>(Bildner)</b></div>
                        <div class='hide'>Manipulation des Aussehens</div>
                    </li>
                </uo>
            </div>
            <div class='item3'>
                <h2 style='margin-left: 0px'>Ätheralki</h2>
                <h4 style='margin-left: 0px'>Orden der Beschwörer</h4>
                <p style='text-align: center'>Fähigkeit: Beschwörung der Elemente</p>
                <p style='text-align: center'>Keftafarbe: blau</p>
                <uo style='list-style-type: none'>
                    <li>
                        <div class='myDIV'><b>Stürmer</b></div>
                        <div class='hide'>Beschwörung von Wind und Wetter</div>                        
                    </li>
                    <li>
                        <div class='myDIV'><b>Fluter</b></div>
                        <div class='hide'>Beschwörung von Wasser</div>
                    </li>
                    <li>
                        <div class='myDIV'><b>Inferni</b></div>
                        <div class='hide'>Beschwörung von Feuer</div>
                    </li>
                    <li>
                        <div class='myDIV'><b>(Dunkler)</b></div>
                        <div class='hide'>Beschwörung von Dunkelheit</div>
                    </li>
                    <li>
                        <div class='myDIV'><b>(Sonnenkrieger)</b></div>
                        <div class='hide'>Beschwörung von Licht</div>
                    </li>
                </uo>
            </div>
            <div class='item3'>
                <h2 style='margin-left: 0px'>Materialki</h2>
                <h4 style='margin-left: 0px'>Orden der Fabrikatoren</h4>
                <p style='text-align: center'>Fähigkeit: Fabrikation und Manipulation von Materialien</p>
                <p style='text-align: center'>Keftafarbe: purpur</p>
                <uo style='list-style-type: none'>
                    <li>
                        <div class='myDIV'><b>Durast</b></div>
                        <div class='hide'>Fabrikation und Manipulation von festen Stoffen</div>
                    </li>
                    <li>
                        <div class='myDIV'><b>Alkemi</b></div>
                        <div class='hide'>Fabrikation und Manipulation von Chemikalien</div>
                    </li>
                </uo>
            </div>
    </div>
    <br>

    <!-- Verzeichnis der Grisha (Glossar) -->
    <div><h3>Grisha</h3></div>

    <script>
        $(document).ready(function() {
            // select2 hard gecodet
            $('#grisha-select').select2({
                placeholder: {
                    id: '-1',
                    text: 'Grishatyp wählen'                 // Platzhalter
                }
            }); 
        });
    </script>

    <!-- Filter zum Aufklappen (mit Akkordion) -->
    <button class="accordion">Filter</button>
        <div class="panel">
            <!-- Filter nach Grisha (Orden und Typ) -->
            <div class="search-wrap">
                <form method="post" action="glossary_grisha_filtergrisha.php">
                    <p>
                        <label for="grisha"></label>
                        <select class="basic-select" id="grisha-select" name="grisha" style="width: 100%">
                            <option value="-1"></option>
                            <optgroup value="1" label="Korporalki">                                                            <!-- select2 dropdown option groups -->
                                <option value="1">Entherzer</option>
                                <option value="2">Heiler</option>
                                <option value="10">Bildner</option>
                            <optgroup>
                            <optgroup value="2" label="Ätheralki">
                                <option value="3">Stürmer</option>
                                <option value="4">Fluter</option>
                                <option value="5">Inferni</option>
                                <option value="8">Dunkler</option>
                                <option value="9">Sonnenkrieger</option>
                            <optgroup>
                            <optgroup value="3" label="Materialki">
                                <option value="6">Durast</option>
                                <option value="7">Alkemi</option>
                            <optgroup>
                        </select>
                    </p>
                    <p>
                        <input id="submit-grisha" type="submit" value="Filter anwenden"/>
                    </p>
                </form>
            </div>
        </div>
    <br>

    <!-- Glossar -->    
    <!-- Buchstaben-Navigation mit Links zu den jeweiligen Glossar-Einträgen --> 
    <div class='letters-bg'>
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
    <br>

    <?php
    /* Array mit Alphabet: so kann durch die Buchstaben iteriert und die Glosar-Ansicht geschaffen werden */
    $alph = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");

    /* Standard-Gloassar (alle Personen) */
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
            WHERE personen.gruppe = 5 AND personen.vorname LIKE '$i%' 
            ORDER BY  personen.vorname, personen.nachname ASC");

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
    <br>

    <!-- Javascript für das aufklappbare Akkordion -->
    <script src="../Javascript/glossary_acc.js"></script>    

<?php include ("footer.inc.php"); ?>