<?php

DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_NAME', 'grishaverse_glossary');  

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (!$conn) {
	die('Verbindung nicht hergestellt! ' . mysqli_connect_error());
}

?>