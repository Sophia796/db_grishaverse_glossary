<?php 
$site_name = "Grishaverse-Datenbank: Glossar";
include ("header.inc.php"); 
include ("navbar.inc.php");
include ("functions.php")
?>

    <div>
        <h2>Glossar</h2>
    </div>
    <h3>Grisha nach Typ suchen</h3>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <p>Grishatyp: <input type="text" name="grisha_typ"/></p>
        <p><button type="submit" name="submitted">Suchen</button></p>
    </form>

    <?php 
    if (isset($_POST["submitted"])) {
        sucheverarbeiten("grisha_typ", "results_grisha.php");
    }
    ?>

<?php include ("footer.inc.php"); ?>