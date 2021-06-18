    
    <br>
    <div class="search">

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" name='ort' placeholder="Nach Ort suchen...">
            <button type="submit" name="submitted">Suchen</button>
        </form>

        <?php 
        /*

        if (isset($_POST["submitted"])) {
            if (isset($_POST["ort]")) {
                $ort = $_POST["ort"];
            } else {
                $ort = '';
            }
        }

        $result = mysqli_query($conn, "SELECT schauplaetze.name, schauplaetze.beschreibung, 
        nationen.name AS nation
        FROM schauplaetze
        JOIN nationen on schauplaetze.nation = nationen.ID
        WHERE schauplaetze.name OR  schauplaetze.beschreibung OR nationen.name LIKE '%$ort%'
        ORDER BY schauplaetze.name ASC");
        */
        ?>

    </div>
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
    <br>

    <?php

    $alph = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q",
"R", "S", "T", "U", "V", "W", "X", "Y", "Z");

    foreach ($alph as $i){

        echo "<div id='orte_letter-$i' class='big-letter'>" . $i . "</div>";

        $result = mysqli_query($conn, "SELECT schauplaetze.name, schauplaetze.beschreibung, 
        nationen.name AS nation
        FROM schauplaetze
        JOIN nationen on schauplaetze.nation = nationen.ID
        WHERE schauplaetze.name LIKE '$i%'
        ORDER BY schauplaetze.name ASC");

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