<?php 
$site_name = "Grishaverse-Datenbank: Leigh Bardugo";
include ("header.inc.php"); 
include ("navbar.inc.php");
?>

<h2>Kontakt</h2>

<?php 
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $formcontent="From: " . $fname . " " . $lname . "\n Message: " .  $message;
    $recipient = "sophia.ackermann@stud-mail.uni-wuerzburg.de";        
    $subject = "Contact Form Grishaverse DB";
    $mailheader = "From: $email \r\n";

    // Mail schicken funktioniert nur auf einem richtigen Server
    // mail($recipient, $subject, $formcontent, $mailheader) or die("Fehler!");              

    echo "<p> Vielen Dank für Ihre Nachricht, " . $fname . " " . $lname . "! </p>";
    echo " <p>Wir kontaktieren Sie in Kürze unter folgender E-Mail-Adresse: " . $email . ". </p>";
?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php include ("footer.inc.php"); ?>