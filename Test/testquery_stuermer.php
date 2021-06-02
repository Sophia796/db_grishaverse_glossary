<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <title>Grishaverse Testabfrage Stürmer</title>
</head>

<body>
    <?php

    $configs = include('config.php.inc');

    $result = mysqli_query($conn, 'SELECT
personen.vorname,
personen.nachname,
grisha.grisha_typ AS grisha_typ
FROM
personen
JOIN grisha ON personen.grisha_typ = grisha.ID
WHERE
(grisha.grisha_typ = "Stürmer");
');

    echo "<h1>Test: Alle Stürmer</h1>";
    echo "<ul>";

    while ($dsatz =  mysqli_fetch_assoc($result)) {
        echo "<li>" . $dsatz["vorname"] , " ",  $dsatz["nachname"] . "</li>";
    }

    echo "</ul>";

    ?>
</body>

</html>