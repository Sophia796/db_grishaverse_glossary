    <nav>
         <ul>
            <li><a onclick='navStatus()' id='status' class='active' href='index.php'>Startseite</a></li>
            <li class='dropdown'>
                <a onclick='navStatus()' id='status' class='inactive' href='about.php'>Das Grishaverse</a>
                <div class='dropdown-content'>
                    <a href='about.php#a1'>Legenden der Grisha</a>
                    <a href='about.php#a2'>Glory or Grave</a>
                    <a href='about.php#a3'>King of Scars</a>
                    <a href='about.php#a4'>Begleitbücher</a>
                    <a href='about.php#a5'>Serie: Shadow and Bone</a>
                </div>
            </li>
            <li><a onclick='navStatus()' id='status' class='inactive' href='author.php'>Leigh Bardugo</a></li>
            <li class='dropdown'>
                <a onclick='navStatus()' id='status' class='inactive'href='glossary.php'>Glossar</a>
                <div class='dropdown-content'>
                    <a>Personen</a>
                    <a>Grisha</a>
                    <a>Orte</a>
                    <a>Begriffe</a>
                    <a>Freie Suche</a>
                </div>
            </li>
            <li><a onclick='navStatus()' id='status' class='inactive' href='map.php'>Karte</a></li>
            <li style='float:right'><a onclick='navStatus()' id='status' class='inactive'>Login</a></li>
        </ul>
    </nav>

    <br>

    <script src='../Javascript/navbar.js'></script>