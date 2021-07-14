
    <nav id="myTopnav">
         <ul>
            <li><a id="site1" href="index.php" onclick="toggleActive(this)" class="active">Startseite</a></li>
            <li class="dropdown">
                <a id="site2" class="dropdown-item" href="about.php" onclick="toggleActive(this)">Das Grishaverse</a>
                <div id="dropdown-content" class="dropdown-content">
                    <a href="about.php#a1">Legenden der Grisha</a>
                    <a href="about.php#a2">Glory or Grave</a>
                    <a href="about.php#a3">King of Scars</a>
                    <a href="about.php#a4">Begleitbücher</a>
                    <a href="about.php#a5">Serie: Shadow and Bone</a>
                </div>
            </li>
            <li><a id="site3" href="author.php" onclick="toggleActive(this)">Leigh Bardugo</a></li>
            <li><a id="site4" href="glossary.php" onclick="toggleActive(this)">Glossar</a></li>
            <li><a id="site5" href="map.php" onclick="toggleActive(this)">Karte</a></li>
            <li id="site6" class="right" onclick="toggleActive(this)"><a href="#">Login</a></li>
            <li><a href="javascript:void(0);" class="icon" onclick="mobileMenu()"><i class="fa fa-bars"></i></a></li>
            <li><a href="javascript:void(0);" class="icon2" onclick="mobileMenu()"><i class="fa fa-angle-up"></i></a></li>
        </ul>
    </nav>
    
    <br>

    <script> 
        function mobileMenu() {

            var x = document.getElementById("myTopnav");

            if(x.classList.contains("responsive")) {
                x.classList.remove("responsive");
            } else {
                x.classList.add("responsive");
            }
        }

        function toggleActive(elem) {

            elem.classList.add("active");

            var sites = ["site1", "site2", "site3", "site4", "site5", "site6"];

            for (site in sites) {
                if (site != elem) {
                    var y = document.getElementById(site);
                    y.classList.remove("active");
                }
            }
        }
    </script>
 
