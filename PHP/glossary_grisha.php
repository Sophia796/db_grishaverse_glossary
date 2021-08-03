<?php 
$site_name = "Grishaverse-Datenbank: Glossar";
include ("header.inc.php"); 
include ("navbar.inc.php");
?>
    <div>
        <h2>Glossar</h2>
    </div>

    <div class="glossary-nav">
        <ul>
            <li><a href="glossary_begriffe.php">Begriffe</a></li>
            <li><a href="glossary_personen.php">Personen</a></li>
            <li><a href="glossary_grisha.php" class="active">Grisha</a></li>
            <li><a href="glossary_orte.php">Orte</a></li>
        </ul>
    </div>

    <?php 
    $configs = include("config.inc.php");
    ?>
    
    <br>
    <br>
    <div class='flex-container'>
            <div class='item3'>
                <h2 style='margin-left: 0px'>Korporalki</h2>
                <h4 style='margin-left: 0px'>Orden der Lebenden und der Toten</h4>
                <p style='text-align: center'>Keftafarbe: rot</p>
                <uo style='list-style-type: none'>
                    <li>Entherzer</li>
                    <li>Heiler</li>
                    <li>(Bildner)</li>
                </uo>
            </div>
            <div class='item3'>
                <h2 style='margin-left: 0px'>Ätheralki</h2>
                <h4 style='margin-left: 0px'>Orden der Beschwörer</h4>
                <p style='text-align: center'>Keftafarbe: blau</p>
                <uo style='list-style-type: none'>
                    <li>Stürmer</li>
                    <li>Fluter</li>
                    <li>Inferni</li>
                    <li>(Dunkler)</li>
                    <li>(Sonnenkrieger)</li>
                </uo>
            </div>
            <div class='item3'>
                <h2 style='margin-left: 0px'>Materialki</h2>
                <h4 style='margin-left: 0px'>Orden der Fabrikatoren</h4>
                <p style='text-align: center'>Keftafarbe: purpur</p>
                <uo style='list-style-type: none'>
                    <li>Durast</li>
                    <li>Alkemi</li>
                </uo>
            </div>
    </div>

<?php include ("footer.inc.php"); ?>