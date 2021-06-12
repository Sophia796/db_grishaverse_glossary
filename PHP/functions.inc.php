<?php
function sucheverarbeiten()
{
    if (isset($_POST['grisha_typ'])) {
        $gt = $_POST['grisha_typ'];
    } else {
        $gt = '';
    }

    header('Location: results.php?grisha_typ=' . $gt);
}
?>