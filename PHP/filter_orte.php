<?php
/* Zugang zur Datenbank */
require_once "config.inc.php";

$nationen = mysqli_query($conn,"SELECT nationen.ID, nationen.name FROM nationen");

$data = array();

while($datensatz = mysqli_fetch_array($nationen)){
    $nation = $datensatz["name"];
    $data[] = array("id"=>$datensatz["ID"], "text"=>$datensatz["name"]);
}

echo json_encode($data);

?>