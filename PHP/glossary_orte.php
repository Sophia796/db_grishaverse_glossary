    
<?php 
$site_name = "Grishaverse-Datenbank: Glossar";
include ("header.inc.php"); 
include ("navbar.inc.php");
?>
    <div>
        <h2>Glossar</h2>
    </div>

    <div class="glossary-nav">
        <ul>
            <li><a href="glossary_begriffe.php">Begriffe</a></li>
            <li><a href="glossary_personen.php">Personen</a></li>
            <li><a href="glossary_grisha.php">Grisha</a></li>
            <li><a href="glossary_orte.php" class="active">Orte</a></li>
        </ul>
    </div>

    <?php 
    $configs = include("config.inc.php");
    ?>
    
    <script>
        $(document).ready(function() {

            // select2 mit ajax
            $('#orte-select').select2({
                ajax: {
                    url: "filter_orte.php",
                    type: "post",
                    dataType: 'json',
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
    

    <!-- Filter und Suche zum Aufklappen (mit Akkordion) -->
    <br>
    <!-- Filter -->
    <button class="accordion">Filter</button>
        <div class="panel">
            <div class="search-wrap">
                <!-- Filter nach Nation -->
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <p><label for="nation">Nation:</label></p>
                    <p><select class="basic-select" id="orte-select" name="nation" style="width: 100%"></select></p>       <!-- select2 mit ajax -->  <!-- onchange="javascipt:submit()" falls Filter direkt angewandt werden sollen -->
                    <p><input id="submit-button" type="submit" value="Filter anwenden"/></p>
                </form>
            </div>
        </div>

    <?php
    
    $filter = false;

        if ($_POST) {
            $suchKriterienStr = "";

            if (is_null($_REQUEST["nation"])) {
                $nationSuche = "";
            } else {
                $nationSuche = $_REQUEST["nation"];
            }
            $filter = true;
        }
    ?>
    
    <!-- Suche -->
    <button class="accordion">Suche</button>
        <div class="panel">
            <div class="search">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <input type="text" name="ort" placeholder="Nach Ort suchen...">
                    <button type="submit" name="submitted">Suchen</button>
                </form>        
            </div>
        </div>
    <br>


    <!-- Glossar -->    
    <div class="letters-bg">
        <strong>
            <a class="link" href="#orte_letter-A">A</a> <a class="link" href="#orte_letter-B">B</a> <a class="link" href="#orte_letter-C">C</a> 
            <a class="link" href="#orte_letter-D">D</a> <a class="link" href="#orte_letter-E">E</a> <a class="link" href="#orte_letter-F">F</a> 
            <a class="link" href="#orte_letter-G">G</a> <a class="link" href="#orte_letter-H">H</a> <a class="link" href="#orte_letter-I">I</a> 
            <a class="link" href="#orte_letter-J">J</a> <a class="link" href="#orte_letter-K">K</a> <a class="link" href="#orte_letter-L">L</a> 
            <a class="link" href="#orte_letter-M">M</a> <a class="link" href="#orte_letter-N">N</a> <a class="link" href="#orte_letter-O">O</a> 
            <a class="link" href="#orte_letter-P">P</a> <a class="link" href="#orte_letter-Q">Q</a> <a class="link" href="#orte_letter-R">R</a> 
            <a class="link" href="#orte_letter-S">S</a> <a class="link" href="#orte_letter-T">T</a> <a class="link" href="#orte_letter-U">U</a> 
            <a class="link" href="#orte_letter-V">V</a> <a class="link" href="#orte_letter-W">W</a> <a class="link" href="#orte_letter-X">X</a> 
            <a class="link" href="#orte_letter-Y">Y</a> <a class="link" href="#orte_letter-Z">Z</a>
        </strong>
    </div>
    <br>

    <?php

    $alph = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");

    if (!$filter) {
        /* Standard-Gloassar ungefiltert */
        foreach ($alph as $i){                                                                            /* für jeden Buchstaben des Alphabets bzw. der im oben definierten Array vorkommt */

            $result = mysqli_query($conn, "SELECT schauplaetze.name, schauplaetze.beschreibung, 
            nationen.name AS nation
            FROM schauplaetze
            JOIN nationen on schauplaetze.nation = nationen.ID
            WHERE schauplaetze.name LIKE '$i%'                                                           /* beginnt mit dem entsprechenden Buchstaben */
            ORDER BY schauplaetze.name ASC");
            

            if (mysqli_num_rows($result) >= 1) {                                                         /* großen Buchstaben nur ausgeben, wenn es auch Glossar-Einträge dazu gibt */
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

    } else {

        /* gewählten Filter ausgeben */
        $filter =  mysqli_query($conn, "SELECT * FROM nationen WHERE ID = '$nationSuche'");
        $f = $filter->fetch_assoc();
        echo "<p>Filter: Alle Orte in " . $f['name'] . "</p>";  
        

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
    }
    ?>
    
    <!-- Option Filter zurücksetzen -->
    <br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <p><input id="submit-button" type="submit" value="Filter zurücksetzen"/></p>
    </form>
    <?php
        if ($_POST) {
            $filter = false;
        }
    ?>


    <br>
    <div class="letters-bg">
        <strong>
            <a class="link" href="#orte_letter-A">A</a> <a class="link" href="#orte_letter-B">B</a> <a class="link" href="#orte_letter-C">C</a> 
            <a class="link" href="#orte_letter-D">D</a> <a class="link" href="#orte_letter-E">E</a> <a class="link" href="#orte_letter-F">F</a> 
            <a class="link" href="#orte_letter-G">G</a> <a class="link" href="#orte_letter-H">H</a> <a class="link" href="#orte_letter-I">I</a> 
            <a class="link" href="#orte_letter-J">J</a> <a class="link" href="#orte_letter-K">K</a> <a class="link" href="#orte_letter-L">L</a> 
            <a class="link" href="#orte_letter-M">M</a> <a class="link" href="#orte_letter-N">N</a> <a class="link" href="#orte_letter-O">O</a> 
            <a class="link" href="#orte_letter-P">P</a> <a class="link" href="#orte_letter-Q">Q</a> <a class="link" href="#orte_letter-R">R</a> 
            <a class="link" href="#orte_letter-S">S</a> <a class="link" href="#orte_letter-T">T</a> <a class="link" href="#orte_letter-U">U</a> 
            <a class="link" href="#orte_letter-V">V</a> <a class="link" href="#orte_letter-W">W</a> <a class="link" href="#orte_letter-X">X</a> 
            <a class="link" href="#orte_letter-Y">Y</a> <a class="link" href="#orte_letter-Z">Z</a>
        </strong>
    </div>

    <script src="../Javascript/glossary_acc.js"></script>


<?php include ("footer.inc.php"); ?>
