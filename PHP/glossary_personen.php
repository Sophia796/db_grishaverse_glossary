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
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <p>
                        <label for="gruppe"></label>
                        <select class="basic-select" id="gruppe-select" name="gruppe" style="width: 70%">                     <!-- select2 dropdown hard gecodet -->
                            <option value="-1"></option>                                                                      <!-- leerer option-Tag für Platzhalter (erste Option wird vom Browser per default angezeigt/gewählt) -->
                            <option value="1">Black Tips</option>                                                               
                            <option value="2">Dime-Lions</option>
                            <option value="3">Dregs</option>
                            <option value="4">Drüskelle</option>
                            <option value="5">Grisha</option>
                            <option value="8">Krämer</option>
                            <option value="6">Krähen</option>
                            <option value="7">Soldat Sol</option>
                        </select>
                        <input id="submit-gruppe" type="submit" name="submit-gruppe" value="Filter anwenden"/>
                    </p>
                </form>
            </div>

            <!-- Filter nach Grisha (Orden und Typ) -->
            <div class="search-wrap">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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
            /* Filter verarbeiten */
            $filterGruppe = false;
            $filterGrisha = false;
            $filterNation = false;

            if ($_POST["submit-gruppe"]) {

                $suchKriterienStr = "";

                if (is_null($_REQUEST["gruppe"])) {
                    $gruppeSuche = "";
                } else {
                    $gruppeSuche = $_REQUEST["gruppe"];
                }
                $filterGruppe = true;

            } elseif ($_POST["submit-grisha"]) {
                $suchKriterienStr = "";

                if (is_null($_REQUEST["grisha"])) {
                    $grishaSuche = "";
                } else {
                    $grishaSuche = $_REQUEST["grisha"];
                }
                $filterGrisha = true;

            } elseif ($_POST["submit-nation"]) {
                $suchKriterienStr = "";

                if (is_null($_REQUEST["orte"])) {
                    $nationSuche = "";
                } else {
                    $nationSuche = $_REQUEST["orte"];
                }
                $filterNation = true;
            } 
            ?>
    
    
    <!-- Suche -->
    <button class="accordion">Suche</button>
        <div class="panel">
            <div class="search">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <input type="text" name="person" placeholder="Nach Person suchen...">
                    <button type="submit" name="submitted">Suchen</button>
                </form>        
            </div>
        </div>
    <br>


    <!-- Glossar -->      
    <div class="letters-bg">
        <strong>
            <a class="link" href="#personen_letter-A">A</a> <a class="link" href="#personen_letter-B">B</a> <a class="link" href="#personen_letter-C">C</a> 
            <a class="link" href="#personen_letter-D">D</a> <a class="link" href="#personen_letter-E">E</a> <a class="link" href="#personen_letter-F">F</a> 
            <a class="link" href="#personen_letter-G">G</a> <a class="link" href="#personen_letter-H">H</a> <a class="link" href="#personen_letter-I">I</a> 
            <a class="link" href="#personen_letter-J">J</a> <a class="link" href="#personen_letter-K">K</a> <a class="link" href="#personen_letter-L">L</a> 
            <a class="link" href="#personen_letter-M">M</a> <a class="link" href="#personen_letter-N">N</a> <a class="link" href="#personen_letter-O">O</a> 
            <a class="link" href="#personen_letter-P">P</a> <a class="link" href="#personen_letter-Q">Q</a> <a class="link" href="#personen_letter-R">R</a> 
            <a class="link" href="#personen_letter-S">S</a> <a class="link" href="#personen_letter-T">T</a> <a class="link" href="#personen_letter-U">U</a> 
            <a class="link" href="#personen_letter-V">V</a> <a class="link" href="#personen_letter-W">W</a> <a class="link" href="#personen_letter-X">X</a> 
            <a class="link" href="#personen_letter-Y">Y</a> <a class="link" href="#personen_letter-Z">Z</a>
        </strong>
    </div>
    <br>

    <?php

    $alph = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");

    /* Standard-Gloassar ungefiltert */
    if (!$filterGruppe and !$filterGrisha and !$filterNation) {
        
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
            WHERE personen.vorname LIKE '$i%' OR personen.nachname LIKE '$i%'
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
                if ($j["gruppe"]) {
                    echo "<li>Gruppe: " . $j["gruppe"] . "</li>";
                }
                if ($j["grisha"]) {
                    echo "<li>Grishatyp: " . $j["grisha"] . "</li>";
                } 
                if ($j["nation"]) {
                    echo "<li>Nation: " . $j["nation"] . "</li>";
                } 
                echo "</uo></li><br>";
            }
            echo "</ul></div>";
        }

    /* gefiltert nach Gruppe*/
    } elseif ($filterGruppe) {
        
        /* Filter ausgeben */
        $filt_gruppe = mysqli_query($conn, "SELECT * FROM gruppen WHERE ID = '$gruppeSuche'"); 
        $f_gruppe = $filt_gruppe->fetch_assoc();
        echo "<div class='glossary-res'><h3>Filter: Alle Personen der Gruppe " .  $f_gruppe['name']  . "</h3></div><br>";  

        /*
        if ($grishaSuche >= 1){
            $filt_grisha = mysqli_query($conn, "SELECT * FROM grisha WHERE ID = '$grishaSuche'");
            $f_grisha = $filt_grisha->fetch_assoc();
            echo "<li>Alle Grisha des Typs " .   $f_grisha['name']  . "</li>";
        }
        if ($nationSuche >= 1){
            $filt_nation = mysqli_query($conn, "SELECT * FROM nationen WHERE ID = '$nationSuche'");
            $f_nation = $filt_nation->fetch_assoc();
            echo "<li>Alle Personen aus " .  $f_nation['name']  . "</li>";  
        }
        echo "</ul></div><br>";
        */

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
                echo "<div id='orte_letter-$i' class='big-letter'>" . $i . "</div>";
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
                if ($j["gruppe"]) {
                    echo "<li>Gruppe: " . $j["gruppe"] . "</li>";
                }
                if ($j["grisha"]) {
                    echo "<li>Grishatyp: " . $j["grisha"] . "</li>";
                } 
                if ($j["nation"]) {
                    echo "<li>Nation: " . $j["nation"] . "</li>";
                } 
                echo "</uo></li><br>";
            }
            echo "</ul></div>";
        }
    }
    ?>


    <!-- Option Filter zurücksetzen -->
    <br>
    <div class="glossary-res">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input id="submit-button" type="submit" value="Filter zurücksetzen"/>
        </form>
    </div>
    <?php
        if ($_POST) {
            $filter = false;
        }
    ?>


    <br>
    <div class="letters-bg">
        <strong>
            <a class="link" href="#personen_letter-A">A</a> <a class="link" href="#personen_letter-B">B</a> <a class="link" href="#personen_letter-C">C</a> 
            <a class="link" href="#personen_letter-D">D</a> <a class="link" href="#personen_letter-E">E</a> <a class="link" href="#personen_letter-F">F</a> 
            <a class="link" href="#personen_letter-G">G</a> <a class="link" href="#personen_letter-H">H</a> <a class="link" href="#personen_letter-I">I</a> 
            <a class="link" href="#personen_letter-J">J</a> <a class="link" href="#personen_letter-K">K</a> <a class="link" href="#personen_letter-L">L</a> 
            <a class="link" href="#personen_letter-M">M</a> <a class="link" href="#personen_letter-N">N</a> <a class="link" href="#personen_letter-O">O</a> 
            <a class="link" href="#personen_letter-P">P</a> <a class="link" href="#personen_letter-Q">Q</a> <a class="link" href="#personen_letter-R">R</a> 
            <a class="link" href="#personen_letter-S">S</a> <a class="link" href="#personen_letter-T">T</a> <a class="link" href="#personen_letter-U">U</a> 
            <a class="link" href="#personen_letter-V">V</a> <a class="link" href="#personen_letter-W">W</a> <a class="link" href="#personen_letter-X">X</a> 
            <a class="link" href="#personen_letter-Y">Y</a> <a class="link" href="#personen_letter-Z">Z</a>
        </strong>
    </div>

    <script src="../Javascript/glossary_acc.js"></script>


<?php include ("footer.inc.php"); ?>