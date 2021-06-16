<?php 
$site_name = 'Grishaverse-Datenbank: Begriffe';
include ('header.inc.php'); 
include ('navbar.inc.php');
include ('functions.php')
?>

    <div>
        <h2>Glossar</h2>
        <h3>Begriffe</h3>
    </div>

    <?php

    $configs = include('config.inc.php');

    $result = mysqli_query($conn, 'SELECT begriffe.begriff, begriffe.beschreibung
    FROM begriffe
    ORDER BY begriffe.begriff ASC');

    echo '<ul>';

    while ($i = mysqli_fetch_assoc($result)) {
        echo '<li>' . $i['begriff'];
    }

    echo '</ul>';

    ?>

<?php include ('footer.inc.php'); ?>