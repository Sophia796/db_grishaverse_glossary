<?php 
$site_name = "Grishaverse-Datenbank: Kontakt";
include ("header.inc.php"); 
include ("navbar.inc.php");
?>

    <h2>Kontakt</h2>

    <?php
        // Festlegen von Fehlermeldungen, wenn notwendige Angaben im Kontaktformular fehlen 
        $fnameErr = $lnameErr = $emailErr = $phoneErr = $messageErr = "";
        $fname = $lname = $email = $phone = $message = "";
    
        // Funktion zum Testen von Userinput (zum Schutz vor Hackern)
        function test_input($data) {
            $data = trim($data);                                  // unnötige Zeichen löschen (Leerzeichen, Tab ect.) 
            $data = stripslashes($data);                          // Backslashes löschen
            $data = htmlspecialchars($data);                      // konvtertiert Sonderzeichen zu HTML Entities (z.B. < zu &lt;)
            return $data;
        }

        if ($_POST) {
            if (empty($_POST["fname"])) {
              $fnameErr = "Bitte geben Sie Ihren Vornamen an.";
            } else {
              $fname = test_input($_POST["fname"]);              // Wenn Eingabe nicht leer, dann Input testen
            }

            if (empty($_POST["lname"])) {
                $lnameErr = "Bitte geben Sie Ihren Nachnamen an.";
              } else {
                $lname = test_input($_POST["lname"]);
              }
          
            if (empty($_POST["email"])) {
                $emailErr = "Bitte geben Sie Ihre E-Mail-Adresse an.";
            } else {
                $email = test_input($_POST["email"]);
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
            }
        }
    ?>

    <!-- Kontaktformular -->

    <form class="flex-container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  <!-- action="contact_submitted.php" -->
        <div class="item2">
            <label for="fname">Vorname</label>
            <span class="error">* <?php echo $fnameErr;?></span>                 
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

<?php include ("footer.inc.php"); ?>