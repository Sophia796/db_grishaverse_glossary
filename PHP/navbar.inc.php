
    <nav id="myTopnav">
        <ul>
            <li><a href="index.php">Startseite</a></li>
            <li class="dropdown">
                <a class="dropdown-item" href="about.php">Das Grishaverse</a>
                <div id="dropdown-content" class="dropdown-content">
                    <a href="about.php#a1">Legenden der Grisha</a>
                    <a href="about.php#a2">Glory or Grave</a>
                    <a href="about.php#a3">King of Scars</a>
                    <a href="about.php#a4">Begleitbücher</a>
                    <a href="about.php#a5">Serie: Shadow and Bone</a>
                </div>
            </li>
            <li><a href="author.php">Leigh Bardugo</a></li>
            <li><a href="glossary_begriffe.php">Glossar</a></li>
            <li><a href="map.php">Karte</a></li>
            <li class="right"><a href="contact.php">Kontakt</a></li>
            <li><a href="javascript:void(0);" class="icon" onclick="mobileMenu()"><i class="fa fa-bars"></i></a></li>                     <!-- Menü-Icon nur bei kleinen Bildschirmen (siehe CSS) -->
            <li><a href="javascript:void(0);" class="icon2" onclick="mobileMenu()"><i class="fa fa-angle-up"></i></a></li>
        </ul>
    </nav>
    
    <br>

    <script> 
    
    /* Die Klasse "responsive" wird mit JavaScript hinzugefügt oder entfernt, wenn der User auf die Icons klickt */
    /* Responsive Design siehe CSS */

        function mobileMenu() {
            var x = document.getElementById("myTopnav");

            if(x.classList.contains("responsive")) {
                x.classList.remove("responsive");
            } else {
                x.classList.add("responsive");
            }
        }

    </script>
 
