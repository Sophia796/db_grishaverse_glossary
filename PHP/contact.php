<?php 
$site_name = "Grishaverse-Datenbank: Kontakt";
include ("header.inc.php"); 
include ("navbar.inc.php");
?>

    <?php
    // Festlegen von Fehlermeldungen, Wenn notwendige Angaben im Kontaktformular fehlen

        $fnameErr = $lnameErr = $emailErr = $phoneErr = $subjectErr = "";
        $fname = $lname = $email = $phone = $subject = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["fname"])) {
              $fnameErr = "Bitte geben Sie Ihren Vornamen an.";
            } else {
              $fname = test_input($_POST["fname"]);
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
                // Überprüfen, ob E-mail Adresse richtif formatiert ist
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Ungültige E-mail-Adresse!";
                  }
            }

            if (empty($_POST["phone"])) {
                $emailErr = "";
            } else {
                $email = test_input($_POST["phone"]);
            }
          
            if (empty($_POST["subject"])) {
                $subjectErr = "Bitte geben Sie eine Nachricht ein.";
            } else {
                $subject = test_input($_POST["subject"]);
            }
        }

        // Input Daten testen
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <!-- Kontaktformular -->

    <h2>Kontakt</h2>

    <form class="flex-container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="item2">
            <label for="fname">Vorname</label>
            <span class="error">* <?php echo $fnameErr;?></span>
            <input type="text" id="fname" name="firstname">

            <label for="lname">Nachname</label>
            <span class="error">* <?php echo $lnameErr;?></span>
            <input type="text" id="lname" name="lastname">

            <label for="email">E-Mail-Adresse</label>
            <span class="error">* <?php echo $emailErr;?></span>
            <input type="text" id="email" name="email">

            <label for="phone">Telefon-Nr.</label>
            <span class="error"><?php echo $phoneErr;?></span>
            <input type="text" id="phone" name="phone">
        </div>

        <div class="item2">
            <label for="subject">Nachricht</label>
            <span class="error">* <?php echo $subjectErr;?></span>
            <textarea id="subject" name="subject" style="height:232.5px"></textarea>
            <input type="submit" value="Senden">
        </div>
    </form>

    <?php
    echo "<p>Sehr geehrte/r $fname $lname, <br>
    Vielen Dank für Ihre Nachricht: <br>
    $subject <br>
    Wir kontaktieren Sie in Kürze unter folgender E-Mail-Adresse: $email.</p>"
    ?>

<?php include ("footer.inc.php"); ?>