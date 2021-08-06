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
            <li><a href="glossary_begriffe.php" class="active">Begriffe</a></li>
            <li><a href="glossary_orte.php">Orte</a></li>
            <li><a href="glossary_personen.php">Personen</a></li>
            <li><a href="glossary_grisha.php">Grisha</a></li>
        </ul>
    </div>
    <br>
    
    <!-- Suche (aufklappbar im Akkordion-Panel) -->
    <button class="accordion">Suche</button>
        <div class="panel">
            <div class="search">
                <form action="glossary_begriffe_suche.php" method="post">
                    <p>
                        <input type="text" name="suchbegriff" placeholder="Nach Begriff suchen..." style="width: 100%"></input>
                        <input type="submit" name="search" value="Suchen"></input>
                    </p>
                </form>        
            </div>
        </div>
    <br>


    <!-- Glossar -->    
    <?php

    /* Array mit Alphabet: so kann durch die Buchstaben iteriert und die Glosar-Ansicht geschaffen werden */
    $alph = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");                     

    /* Standard-Gloassar (alle Begriffe) */
        /* Buchstaben-Navigation mit Links zu den jeweiligen Glossar-Einträgen */
        echo 
        "<div class='letters-bg'>
        <strong>
            <a class='link' href='#begriffe_letter-A'>A</a> <a class='link' href='#begriffe_letter-B'>B</a> <a class='link' href='#begriffe_letter-C'>C</a> 
            <a class='link' href='#begriffe_letter-D'>D</a> <a class='link' href='#begriffe_letter-E'>E</a> <a class='link' href='#begriffe_letter-F'>F</a> 
            <a class='link' href='#begriffe_letter-G'>G</a> <a class='link' href='#begriffe_letter-H'>H</a> <a class='link' href='#begriffe_letter-I'>I</a> 
            <a class='link' href='#begriffe_letter-J'>J</a> <a class='link' href='#begriffe_letter-K'>K</a> <a class='link' href='#begriffe_letter-L'>L</a> 
            <a class='link' href='#begriffe_letter-M'>M</a> <a class='link' href='#begriffe_letter-N'>N</a> <a class='link' href='#begriffe_letter-O'>O</a> 
            <a class='link' href='#begriffe_letter-P'>P</a> <a class='link' href='#begriffe_letter-Q'>Q</a> <a class='link' href='#begriffe_letter-R'>R</a> 
            <a class='link' href='#begriffe_letter-S'>S</a> <a class='link' href='#begriffe_letter-T'>T</a> <a class='link' href='#begriffe_letter-U'>U</a> 
            <a class='link' href='#begriffe_letter-V'>V</a> <a class='link' href='#begriffe_letter-W'>W</a> <a class='link' href='#begriffe_letter-X'>X</a> 
            <a class='link' href='#begriffe_letter-Y'>Y</a> <a class='link' href='#begriffe_letter-Z'>Z</a>
        </strong>
        </div>
        <br>";

        foreach ($alph as $i){                                                                                      /* für jeden Buchstaben des Alphabets bzw. der im oben definierten Array vorkommt */

            /* Datenbank-Abfrage */
            $result = mysqli_query($conn, "SELECT begriffe.name, begriffe.beschreibung
            FROM begriffe
            WHERE begriffe.name LIKE '$i%'                                                                          /* beginnt mit dem entsprechenden Buchstaben */
            ORDER BY begriffe.name ASC");

            /* großer Buchstabe zur Unterteilung der Glossar-Einträge (nur ausgeben, wenn es auch Glossar-Einträge dazu gibt) */
            if (mysqli_num_rows($result) >= 1) {                                                                    
                echo "<div id='begriffe_letter-$i' class='big-letter'>" . $i . "</div>";
            }

            /* Ergbnisse er Datenbank-Abfrage als Glossar-Einträge ausgeben */
            echo "<div class='glossary-bg'><ul>";

            while ($j = mysqli_fetch_assoc($result)) {
                echo "<li><h3>" . $j["name"] . "</h3>";
                echo $j["beschreibung"] . "<br><br>";
            }

            echo "</li></ul></div>";
        }
        echo "<br>";
    ?>


    <!-- Javascript für das aufklappbare Akkordion -->
    <script src="../Javascript/glossary_acc.js"></script>


<?php include ("footer.inc.php"); ?>