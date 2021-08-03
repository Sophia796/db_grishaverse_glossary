<?php
function sucheverarbeiten($search, $result_page){
    if (isset($_POST[$search])) {
        $x = $_POST[$search];
    } else {
        $x = '';
    }

    header('Location:'. $result_page .'?'. $search .'=' . $x);
}
?>

        <!--
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
        -->


        <!--
        $result = mysqli_query($conn, "SELECT schauplaetze.name, schauplaetze.beschreibung, 
            nationen.name AS nation
            FROM schauplaetze
            JOIN nationen on schauplaetze.nation = nationen.ID
            WHERE schauplaetze.nation = '$nationSuche'
            
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

        -->