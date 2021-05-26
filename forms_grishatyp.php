<!DOCTYPE html>
<?php

if (isset($_POST["submitted"])) {
    sucheverarbeiten();
}

function sucheverarbeiten()
{
    if (isset($_POST["grisha_typ"])) {
        $gt = $_POST["grisha_typ"];
    } else {
        $gt = "";
    }

    header("Location: results.php?grisha_typ=" . $gt);
}

?>

<html lang="de">

<head>
    <meta charset="utf-8">
    <title>Testformular</title>
</head>

<body>

    <h1>Grisha nach Typ suchen</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <p>Grishatyp: <input type="text" name="grisha_typ" /></p>
        <p><button type="submit" name="submitted">Suchen</button></p>
    </form>

</body>

</html>