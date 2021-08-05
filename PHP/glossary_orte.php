    
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


    <!-- select2 mit ajax (für Filterung) -->
    <script>
        $(document).ready(function() {

            $('#orte-select').select2({
                placeholder: "Nation wählen",                               // Platzhalter
                allowClear: true,
                ajax: {
                    url: "filter_orte.php",
                    type: "post",
                    dataType: "json",
                    data: function(params) {
                        return {
                            searchTerm: params.term
                        };
                    },
                    processResults: function(response) {
                        console.log(response);
                        return {
                            results: response
                        };
                    },
                }
            });
        });
    </script>
    

    <!-- Filter und Suche zum Aufklappen (im Akkordion-Panel) -->
    <!-- Filter -->
    <button class="accordion">Filter</button>
        <div class="panel">
            <div class="search-wrap">
                <!-- Filter nach Nation -->
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <p>
                        <label for="nation"></label>
                        <!-- select2 mit ajax -->  
                        <select class="basic-select" id="orte-select" name="nation" style="width: 100%"></select>                 <!-- onchange="javascipt:submit()" falls Filter direkt angewandt werden sollen (ohne submit-Button klicken) -->
                    </p>
                    <p><input id="submit-button" name="filter" type="submit" value="Filter anwenden"/></p>
                </form>
            </div>
        </div>

    <!-- Suche -->
    <button class="accordion">Suche</button>
        <div class="panel">
            <div class="search">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <p>
                        <input type="text" name="suchort" placeholder="Nach Ort suchen..." style="width: 100%"></input>
                        <input type="submit" name="search" value="Suchen"></input>
                    </p>
                </form>        
            </div>
        </div>
    <br>

    <!-- Filter und Suche verarbeiten -->
    <?php
        $filter = false;                                              // Variablen sind per default false --> Anzeigen des Standard-Glossars
        $suche = false;   

        if ($_POST) {
            $suchKriterienStr = "";

            if (is_null($_REQUEST["nation"])) {
                $nationSuche = "";
                $filter = false;
            } else {
                $nationSuche = $_REQUEST["nation"];
                $filter = true;                                      // wenn der Button geklickt wird, wird die Variable auf true gesetzt und die Glossar-Anzeige wird modifiziert (statt dem Standard-Glossar wird das gefilterte angezeigt)
            }
        
        } elseif ($_POST) {

            $suchKriterienStr = "";

            if (is_null($_REQUEST["suchort"])) {
                $ortSuche = "";
                $suche = false;
            } else {
                $ortSuche = $_REQUEST["suchort"];
                $suche = true;   
            }                                                
        } 
    ?>


    <!-- Glossar -->   
    <?php

    /* Array mit Alphabet: so kann durch die Buchstaben iteriert und die Glosar-Ansicht geschaffen werden */
    $alph = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");

    /* Standard-Gloassar (alle Orte) */
    if (!$filter && !$suche) {

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

        foreach ($alph as $i){                                                                            /* für jeden Buchstaben des Alphabets bzw. der im oben definierten Array vorkommt */

            /* Datenbank-Abfrage */
            $result = mysqli_query($conn, "SELECT schauplaetze.name, schauplaetze.beschreibung, 
            nationen.name AS nation
            FROM schauplaetze
            JOIN nationen on schauplaetze.nation = nationen.ID
            WHERE schauplaetze.name LIKE '$i%'                                                           /* beginnt mit dem entsprechenden Buchstaben */
            ORDER BY schauplaetze.name ASC");
            

            /* großer Buchstabe zur Unterteilung der Glossar-Einträge (nur ausgeben, wenn es auch Glossar-Einträge dazu gibt) */
            if (mysqli_num_rows($result) >= 1) {                                                         
                echo "<div id='orte_letter-$i' class='big-letter'>" . $i . "</div>";
            }

            /* Ergbnisse er Datenbank-Abfrage als Glossar-Einträge ausgeben */
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

    
    /* Gefiltert */
    } else {

        /* gewählten Filter ausgeben */
        $filt =  mysqli_query($conn, "SELECT * FROM nationen WHERE ID = '$nationSuche'");
        $f = $filt->fetch_assoc();
        echo "<div class='glossary-res'><h3>Filter: Alle Orte in " . $f['name'] . "</h3></div><br>";  
        

        foreach ($alph as $i){
            
            $result = mysqli_query($conn, "SELECT schauplaetze.name, schauplaetze.beschreibung, 
            nationen.name AS nation
            FROM schauplaetze
            JOIN nationen on schauplaetze.nation = nationen.ID
            WHERE schauplaetze.nation = '$nationSuche' AND schauplaetze.name LIKE '$i%'            /* entspricht der gewählten Option und beginnt mit dem entsprechenden Buchstaben */
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

        
        /* Option Filter zurücksetzen */
        echo 
        "<br>
        <div class='glossary-res'>
            <form method='post' action=" . htmlspecialchars($_SERVER["PHP_SELF"]) . ">
                <input id='submit-button' type='submit' value='Filter zurücksetzen'/>
            </form>
        </div>";
        if ($_POST) {
            $filter = false;                       // durch Klick auf den Button wird die Variable wieder aus false gesetzt, die Seite neu geladen und das Standard-Glossar angezeigt
        }
    }
    ?>


    <!-- Javascript für das aufklappbare Akkordion -->
    <script src="../Javascript/glossary_acc.js"></script>


<?php include ("footer.inc.php"); ?>
