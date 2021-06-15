<?php 
$site_name = 'Grishaverse-Datenbank: Glossar';
include ('header.inc.php'); 
include ('navbar.inc.php');
?>

<?php
function sucheverarbeiten()
{
    if (isset($_POST['search'])) {
        $s = $_POST['search'];
    } else {
        $s = '';
    }

    header('Location: results_search.php?search=' . $s);
}
?>

<?php 
if (isset($_POST['submitted'])) {
    sucheverarbeiten();
}
?>

    <div>
        <h2>Glossar</h2>
    </div>
    <h3>Freie Suche</h3>

    <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method='post'>
        <p><input type='text' name='search' /></p>
        <p><button type='submit' name='submitted'>Suchen</button></p>
    </form>

<?php include ('footer.inc.php'); ?>