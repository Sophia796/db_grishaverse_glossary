<?php 
$site_name = "Grishaverse-Datenbank: Glossar";
include ("header.inc.php"); 
include ("navbar.inc.php");
?>
    <div>
        <h2>Glossar</h2>
    </div>

    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'Begriffe')" id="defaultOpen">Begriffe</button>
        <button class="tablinks" onclick="openTab(event, 'Personen')">Personen</button>
        <button class="tablinks" onclick="openTab(event, 'Grisha')">Grisha</button>
        <button class="tablinks" onclick="openTab(event, 'Orte')">Orte</button>
    </div>

    <?php 
    $configs = include("config.inc.php");
    ?>

    <div id="Begriffe" class="tabcontent">
        <?php 
        include ("glossary_begriffe.php"); 
        ?>
    </div>

    <div id="Personen" class="tabcontent">
        <?php 
        include ("glossary_personen.php"); 
        ?>
    </div>

    <div id="Grisha" class="tabcontent">
        <?php 
        include ("glossary_grisha.php"); 
        ?>
    </div>

    <div id="Orte" class="tabcontent">
        <?php 
        include ("glossary_orte.php"); 
        ?>
    </div>

    <script src="../Javascript/glossary_tabs.js"></script>
    
<?php include ("footer.inc.php"); ?>