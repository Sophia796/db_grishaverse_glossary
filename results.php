<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <title>Testergebnisse</title>
</head>

<body>

    <?php
    $gt = $_REQUEST["grisha_typ"];
    ?>

    <h1>Grishatyp <?php echo $gt ?></h1>
    <?php

    $configs = include('config.php.inc');

    $result = mysqli_query($conn, 'SELECT
personen.vorname,
personen.nachname,
personen.weitere_namen,
grisha.grisha_typ AS grisha_typ
FROM
personen
JOIN grisha ON personen.grisha_typ = grisha.ID
WHERE
(grisha.grisha_typ = "' . $gt . '");
');


    if (mysqli_num_rows($result) < 1) {
        echo "Keine Grisha des Typs  " . $gt . " gefunden";
    } else {

        echo "<ul>";

        while ($dsatz =  mysqli_fetch_assoc($result)) {
            echo "<li>" . $dsatz["vorname"] , " ",  $dsatz["nachname"];
            if ($dsatz["weitere_namen"]) {
                echo " (", $dsatz["weitere_namen"] , ")";
            } 
            echo "</li>";
        }

        echo "</ul>";
    }

    ?>

</body>

</html>