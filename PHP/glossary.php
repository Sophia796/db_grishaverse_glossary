<?php 
$site_name = 'Grishaverse-Datenbank: Glossar';
include ('header.inc.php'); 
include ('navbar.inc.php');
?>
    <div>
        <h2>Glossar</h2>
    </div>

    <div class='flex-container'>
        <div class='item4'>
            <h3 style='margin-left: 0'><a class='link' href='glossary_begriffe.php' style='color: black'>Begriffe</a></h3>
        </div>
        <div class='item4'>
            <h3 style='margin-left: 0'><a class='link' href='glossary_personen.php' style='color: black'>Personen</a></h3>
            <a class='link' href='#'>Namen</a> <br>
            <a class='link' href='#'>Gruppen</a> <br>
        </div>
        <div class='item4'>
            <h3 style='margin-left: 0'><a class='link' href='#'style='color: black'>Grisha</a></h3>
            <a class='link' href='#'>Orden</a> <br>
            <a class='link' href='#'>Typen</a>
        </div>
        <div class='item4'>
            <h3 style='margin-left: 0'><a class='link' href='#' style='color: black'>Orte</a></h3>
            <a class='link' href='#'>Nationen</a> <br>
            <a class='link' href='#'>Schauplätze</a> <br>
            <a class='link' href='map.php'>Karte</a> 
        </div>
    </div>
    
<?php include ('footer.inc.php'); ?>