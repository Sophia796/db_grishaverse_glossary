    <!--
    <nav>
         <ul>
            <li><a href="index.php"class="active">Startseite</a></li>
            <li class="dropdown">
                <a class="dropdown-item" href="about.php">Das Grishaverse</a>
                <div class="dropdown-content">
                    <a href="about.php#a1">Legenden der Grisha</a>
                    <a href="about.php#a2">Glory or Grave</a>
                    <a href="about.php#a3">King of Scars</a>
                    <a href="about.php#a4">Begleitbücher</a>
                    <a href="about.php#a5">Serie: Shadow and Bone</a>
                </div>
            </li>
            <li><a href="author.php">Leigh Bardugo</a></li>
            <li><a href="glossary.php">Glossar</a></li>
            <li><a href="map.php">Karte</a></li>
            <li class="right"><a href="#">Login</a></li>
        </ul>
    </nav>

    <br>
--> 

    <div class="topnav" id="myTopnav">
    	<a onclick="toggleActive()" id="mySite" class="active" href="index.php">Startseite</a>
        <div class="dropdown">
            <a onclick="toggleActive()" id="mySite" href="about.php">
                <button class="dropbtn">Das Grishaverse
                    <i class="fa fa-caret-down"></i>
                </button>
            </a>
            <div class="dropdown-content">
                <a href="about.php#a1">Legenden der Grisha</a>
                <a href="about.php#a2">Glory or Grave</a>
                <a href="about.php#a3">King of Scars</a>
                <a href="about.php#a4">Begleitbücher</a>
                <a href="about.php#a5">Serie: Shadow and Bone</a>
            </div>
        </div>
        <a onclick="toggleActive()" id="mySite" href="author.php">Leigh Bardugo</a>
        <a onclick="toggleActive()" id="mySite" href="glossary.php">Glossar</a>
        <a onclick="toggleActive()" id="mySite" href="map.php">Karte</a>
        <a onclick="toggleActive()" id="mySite" class="right" href="#">Login</a>
        <a href="javascript:void(0);" class="icon" onclick="makeResponsive()">&#9776;</a>
    </div>

    <br>

    <script>
        /* Responsive-Design */
        function makeResponsive() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }

        function toggleActive() {
            var x = document.getElementById("mySite");
            /* x.classList.toggle("active"); */
            x.addClass("active"); 
            x.siblings().removeClass("active"); 
        }

    </script>

    <script>src="../Javascript/navbar.js"></script>   