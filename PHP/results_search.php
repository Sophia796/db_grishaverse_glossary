<?php 
$site_name = 'Grishaverse-Datenbank: Ergebnisse';
include ('header.inc.php'); 
include ('navbar.inc.php');
?>

    <div>
        <h2>Ergebnisse</h2>
    </div>

    <?php
    $s = $_REQUEST['search'];
    ?>

    <h3>Suche nach <?php echo $s ?></h3>
    <?php

    $configs = include('config.inc.php');

    $result = mysqli_query($conn, 'SELECT * FROM * WHERE * LIKE ' . $s .'');


    if (mysqli_num_rows($result) < 1) {
        echo 'Keine Ergebnise für ' . $s . ' gefunden.';
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