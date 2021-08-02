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

