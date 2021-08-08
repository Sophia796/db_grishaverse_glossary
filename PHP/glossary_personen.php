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


    <script>
        $(document).ready(function() {
            // select2 hard gecodet
            $('#gruppe-select').select2({
                placeholder: {
                    id: '-1',
                    text: 'Gruppe wählen'                  // Platzhalter
                }
            }); 
            $('#grisha-select').select2({
                placeholder: {
                    id: '-1',
                    text: 'Grishatyp wählen'
                }
            }); 
            $('#orte-select').select2({
                placeholder: {
                    id: '-1',
                    text: 'Nation wählen'
                }
            }); 
        });
    </script>


    <!-- Filter und Suche zum Aufklappen (mit Akkordion) -->
    <!-- Filter -->
    <button class="accordion">Filter</button>
        <div class="panel">
            <!-- Filter nach Gruppe -->
            <div class="search-wrap">
                <form method="post" action="glossary_personen_filtergruppe.php">
                    <p>
                        <label for="gruppe"></label>
                        <select class="basic-select" id="gruppe-select" name="gruppe" style="width: 70%">                     <!-- select2 dropdown hard gecodet -->
                            <option value="-1"></option>                                                                      <!-- leerer option-Tag für Platzhalter (erste Option wird vom Browser per default angezeigt/gewählt) -->
                            <option value="1">Black Tips</option>                                                               
                            <option value="2">Dime-Lions</option>
                            <option value="3">Dregs</option>
                            <option value="4">Drüskelle</option>
                            <option value="11">Erste Armee</option>
                            <option value="5">Grisha</option>
                            <option value="8">Krämer</option>
                            <option value="6">Krähen</option>
                            <option value="7">Soldat Sol</option>
                            <option value="10">Zarenfamilie</option>
                            <option value="9">Keine Gruppe/unbekannt</option>
                        </select>
                        <input id="submit-gruppe" type="submit" name="submit-gruppe" value="Filter anwenden"/>
                    </p>
                </form>
            </div>

            <!-- Filter nach Grisha (Orden und Typ) -->
            <div class="search-wrap">
                <form method="post" action="glossary_personen_filtergrisha.php">
                    <p>
                        <label for="grisha"></label>
                        <select class="basic-select" id="grisha-select" name="grisha" style="width: 70%">
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
                        <input id="submit-grisha" type="submit" value="Filter anwenden"/>
                    </p>
                </form>
            </div>

            <!-- Filter nach Nation -->
            <div class="search-wrap">  
                <form method="post" action="glossary_personen_filternation.php">
                    <p>
                        <label for="nation"></label>
                        <select class="basic-select" id="orte-select" name="orte" style="width: 70%">
                            <option value="-1"></option>                 
                            <option value="1">Kerch</option>                                                               
                            <option value="2">Novyi Zem</option>
                            <option value="3">Ravka</option>
                            <option value="4">Suli</option>
                            <option value="5">Shu-Han</option>
                            <option value="6">Wandernde Insel</option>
                            <option value="7">Fjerda</option>
                        </select>
                        <input id="submit-nation" type="submit" value="Filter anwenden"/>
                    </p>
                </form>
            </div>
        </div>

        <?php
            /* Filter verarbeiten 

              } elseif ($_POST["submit-nation"]) {
                $suchKriterienStr = "";

                if (is_null($_REQUEST["orte"])) {
                    $nationSuche = "";
                } else {
                    $nationSuche = $_REQUEST["orte"];
                }
                $filterNation = true;
            } 
            */
            ?>
    

    <!-- Suche -->
    <button class="accordion">Suche</button>
        <div class="panel">
            <div class="search">
                <form action="glossary_personen_suche.php" method="post">
                    <p>
                        <input type="text" name="suchperson" placeholder="Nach Person suchen..." style="width: 100%"></input>
                        <input type="submit" name="search" value="Suchen"></input>
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
            WHERE personen.vorname LIKE '$i%'                                                        /* nach Vorname oder Nachname ins Glossar einordnen oder beides (Personen doppelt)? --> hier: Entscheidung für Vorname */
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