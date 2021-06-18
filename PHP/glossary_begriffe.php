    <br>
    <div class="search">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" name='begriff' placeholder="Nach Begriff suchen...">
            <button type="submit" name="submitted">Suchen</button>
        </form>        
    </div>
    <br>
    
    <div class="letters-bg">
        <strong>
            <a class="link" href="#begriffe_letter-A">A</a> <a class="link" href="#begriffe_letter-B">B</a> <a class="link" href="#begriffe_letter-C">C</a> 
            <a class="link" href="#begriffe_letter-D">D</a> <a class="link" href="#begriffe_letter-E">E</a> <a class="link" href="#begriffe_letter-F">F</a> 
            <a class="link" href="#begriffe_letter-G">G</a> <a class="link" href="#begriffe_letter-H">H</a> <a class="link" href="#begriffe_letter-I">I</a> 
            <a class="link" href="#begriffe_letter-J">J</a> <a class="link" href="#begriffe_letter-K">K</a> <a class="link" href="#begriffe_letter-L">L</a> 
            <a class="link" href="#begriffe_letter-M">M</a> <a class="link" href="#begriffe_letter-N">N</a> <a class="link" href="#begriffe_letter-O">O</a> 
            <a class="link" href="#begriffe_letter-P">P</a> <a class="link" href="#begriffe_letter-Q">Q</a> <a class="link" href="#begriffe_letter-R">R</a> 
            <a class="link" href="#begriffe_letter-S">S</a> <a class="link" href="#begriffe_letter-T">T</a> <a class="link" href="#begriffe_letter-U">U</a> 
            <a class="link" href="#begriffe_letter-V">V</a> <a class="link" href="#begriffe_letter-W">W</a> <a class="link" href="#begriffe_letter-X">X</a> 
            <a class="link" href="#begriffe_letter-Y">Y</a> <a class="link" href="#begriffe_letter-Z">Z</a>
        </strong>
    </div>
    <br>

    <?php

    $alph = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q",
"R", "S", "T", "U", "V", "W", "X", "Y", "Z");

    foreach ($alph as $i){

        echo "<div id='begriffe_letter-$i' class='big-letter'>" . $i . "</div>";

        $result = mysqli_query($conn, "SELECT begriffe.name, begriffe.beschreibung
        FROM begriffe
        WHERE begriffe.name LIKE '$i%'
        ORDER BY begriffe.name ASC");

        echo "<div class='glossary-bg'><ul>";

        while ($j = mysqli_fetch_assoc($result)) {
            echo "<li><h3>" . $j["name"] . "</h3>";
            echo $j["beschreibung"] . "<br><br>";
        }

        echo "</li></ul></div>";
    }

    ?>

    <br>
    <div class="letters-bg">
        <strong>
            <a class="link" href="#begriffe_letter-A">A</a> <a class="link" href="#begriffe_letter-B">B</a> <a class="link" href="#begriffe_letter-C">C</a> 
            <a class="link" href="#begriffe_letter-D">D</a> <a class="link" href="#begriffe_letter-E">E</a> <a class="link" href="#begriffe_letter-F">F</a> 
            <a class="link" href="#begriffe_letter-G">G</a> <a class="link" href="#begriffe_letter-H">H</a> <a class="link" href="#begriffe_letter-I">I</a> 
            <a class="link" href="#begriffe_letter-J">J</a> <a class="link" href="#begriffe_letter-K">K</a> <a class="link" href="#begriffe_letter-L">L</a> 
            <a class="link" href="#begriffe_letter-M">M</a> <a class="link" href="#begriffe_letter-N">N</a> <a class="link" href="#begriffe_letter-O">O</a> 
            <a class="link" href="#begriffe_letter-P">P</a> <a class="link" href="#begriffe_letter-Q">Q</a> <a class="link" href="#begriffe_letter-R">R</a> 
            <a class="link" href="#begriffe_letter-S">S</a> <a class="link" href="#begriffe_letter-T">T</a> <a class="link" href="#begriffe_letter-U">U</a> 
            <a class="link" href="#begriffe_letter-V">V</a> <a class="link" href="#begriffe_letter-W">W</a> <a class="link" href="#begriffe_letter-X">X</a> 
            <a class="link" href="#begriffe_letter-Y">Y</a> <a class="link" href="#begriffe_letter-Z">Z</a>
        </strong>
    </div>