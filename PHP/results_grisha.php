<?php 
$site_name = 'Grishaverse-Datenbank: Ergebnisse Grisha nach Typ';
include ('header.inc.php'); 
include ('navbar.inc.php');
?>

    <div>
        <h2>Ergebnisse</h2>
    </div>

    <?php
    $gt = $_REQUEST['grisha_typ'];
    ?>

    <h3>Grishatyp <?php echo $gt ?></h3>
    <?php

    $configs = include('config.inc.php');

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
        echo 'Keine Grisha des Typs  ' . $gt . ' gefunden.';
    } else {

        echo '<ul>';

        while ($dsatz =  mysqli_fetch_assoc($result)) {
            echo '<li>' . $dsatz['vorname'] , ' ',  $dsatz['nachname'];
            if ($dsatz['weitere_namen']) {
                echo ' (', $dsatz['weitere_namen'] , ')';
            } 
            echo '</li>';
        }

        echo '</ul>';
    }

    ?>

<?php include ('footer.inc.php'); ?>