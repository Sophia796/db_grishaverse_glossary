<?php 
$site_name = "Grishaverse-Datenbank: Kontakt";
include ("header.inc.php"); 
include ("navbar.inc.php");
?>

    <h2>Kontakt</h2>

    <?php
        // Funktion zum Testen von Userinput (zum Schutz vor Hackern)
        function test_input($data) {
            $data = trim($data);                                  // unnötige Zeichen löschen (Leerzeichen, Tab ect.) 
            $data = stripslashes($data);                          // Backslashes löschen
            $data = htmlspecialchars($data);                      // konvtertiert Sonderzeichen zu HTML Entities (z.B. < zu &lt;)
            return $data;
        }

        // Festlegen von Fehlermeldungen, wenn notwendige Angaben im Kontaktformular fehlen 
        // Variablen definieren (zu Beginn sind alle leer bzw. false --> Änderung je nach Status der Input-Überprüfung)
        $fnameErr = $lnameErr = $emailErr = $phoneErr = $messageErr = "";
        $fname = $lname = $email = $phone = $message = "";
        $validfname = $validlname = $validemail = $validmessage = false;
        $valid = false;

        if ($_POST) {
            if (empty($_POST["fname"])) {                        // Wenn Input leer, dann bekommt error-Variable Wert (Fehlermeldung)
              $fnameErr = "Bitte geben Sie Ihren Vornamen an.";
            } else {
              $fname = test_input($_POST["fname"]);              // Ansonsten Input testen und valid-Variable auf true
              $validfname = true;
            }

            if (empty($_POST["lname"])) {
                $lnameErr = "Bitte geben Sie Ihren Nachnamen an.";
              } else {
                $lname = test_input($_POST["lname"]);
                $validlname = true;
              }
          
            if (empty($_POST["email"])) {
                $emailErr = "Bitte geben Sie Ihre E-Mail-Adresse an.";
            } else {
                $email = test_input($_POST["email"]);
                $validemail = true;
                // Überprüfen, ob E-mail Adresse richtig formatiert ist
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Bitte geben Sie eine gültige E-Mail-Adresse an.";
                }
            }

            if (empty($_POST["phone"])) {
                $phoneErr = "";
            } else {
                $phone = test_input($_POST["phone"]);
            }
          
            if (empty($_POST["message"])) {
                $messageErr = "Bitte geben Sie eine Nachricht ein.";
            } else {
                $message = test_input($_POST["message"]);
                $validmessage = true;
            }

            // Wenn alles passt: $valid auf true, damit weiter verarbeitet werden kann (siehe unten)
            if ($validfname and $validlname and $validemail and $validmessage) {
                $valid = true;
            }
        }
    ?>


    <!-- Kontaktformular HTML -->
    <form class="flex-container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        <div class="item2">
            <label for="fname">Vorname</label>
            <span class="error">* <?php echo $fnameErr;?></span>                        <!-- Fehlermeldung bei Bedarf ausgeben -->            
            <input type="text" id="fname" name="fname" value="<?php echo $fname;?>">

            <label for="lname">Nachname</label>
            <span class="error">* <?php echo $lnameErr;?></span>
            <input type="text" id="lname" name="lname" value="<?php echo $lname;?>">

            <label for="email">E-Mail-Adresse</label>
            <span class="error">* <?php echo $emailErr;?></span>
            <input type="text" id="email" name="email" value="<?php echo $email;?>">

            <label for="phone">Telefon-Nr.</label>
            <span class="error"><?php echo $phoneErr;?></span>
            <input type="text" id="phone" name="phone" value="<?php echo $phone;?>">
        </div>

        <div class="item2">
            <label for="message">Nachricht</label>
            <span class="error">* <?php echo $messageErr;?></span>
            <textarea id="message" name="message" style="height:232.5px"><?php echo $message;?></textarea>
            <input type="submit" value="Senden">
        </div>
    </form>


    <?php
    // Verarbeitung des Inputs und Bestätigung für den User 
    if ($valid) {
        $formcontent="From: " . $fname . " " . $lname . "\n Message: " .  $message;
        $recipient = "sophia.ackermann@stud-mail.uni-wuerzburg.de";        
        $subject = "Nachricht von Grishaverse DB";
        $mailheader = "From: $email \r\n";

        // Mail an mich schicken (funktioniert nur auf einem richtigen Server)
        // mail($recipient, $subject, $formcontent, $mailheader) or die("Fehler!");              

        echo "<br> <p> Vielen Dank für Ihre Nachricht, " . $fname . " " . $lname . "! </p>";
        echo " <p> Wir kontaktieren Sie in Kürze unter folgender E-Mail-Adresse: " . $email . ". </p>";
        include ("footer.inc.php");
        exit();
    }
    ?>

<?php include ("footer.inc.php"); ?>