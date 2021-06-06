<!DOCTYPE html>
<html lang='de'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Grishaverse-Datenbank: Startseite</title>
    <link rel='stylesheet' href='../CSS/style.css'>
    <link rel='stylesheet' href='../CSS/header_footer.css'>
    <link rel='stylesheet' href='../CSS/navbar.css'>
    <link rel='stylesheet' href='../CSS/slideshow.css'>
</head>

<body>
    <div class='header'>
        <h1>GRISHAVERSE</h1>
    </div>

    <!-- Navigationsleiste mit Dropdown -->
    <nav>
         <ul>
            <li><a href='index.php' class='active'>Startseite</a></li>
            <li class='dropdown'>
                <a href='about.php'>Das Grishaverse</a>
                <div class='dropdown-content'>
                    <a>Die Legenden der Grisha</a>
                    <a>Die Krähen-Dilogie</a>
                    <a>Die King of Scars-Dilogie</a>
                    <a>Kurzgeschichten und Specials</a>
                    <a>Serie: Shadow and Bone - Legenden der Grisha</a>
                </div>
            </li>
            <li class='dropdown'>
                <a href= 'glossary.php'>Glossar</a>
                <div class='dropdown-content'>
                    <a>Personen</a>
                    <a>Grisha</a>
                    <a>Orte</a>
                    <a>Begriffe</a>
                    <a>Freie Suche</a>
                </div>
            </li>
            <li><a href='map.php'>Karte</a></li>
            <li style='float:right'><a>Login</a></li>
        </ul>
    </nav>

    <br>

    <div>
        <h2>Willkommen im Grisahverse</h2>
        <p>
        ...dem Universum, in dem Leigh Bardugos beliebte Fantasy-Buchreihen spielen. <br>
        Hier finden Sie Informationen zu den einzelnen Büchern, ein Glossar der wichtigsten Begriffe, 
        eine Datenbank zum Durchsuchen und vieles mehr!
        </p>
    </div>

    <!-- Slideshow -->
    <div class='slideshow-container'>
        <div class='mySlides fade'>
            <div class='numbertext'>1 / 3</div>
            <img src='../images/testimage.jpg' style='width:100%'> 
            <div class='text'>Das Grishaverse</div>
        </div>
        <div class='mySlides fade'>
            <div class='numbertext'>2 / 3</div>
            <img src='../images/testimage.jpg' style='width:100%'>
            <div class='text'>Glossar</div>
        </div>
        <div class='mySlides fade'>
            <div class='numbertext'>3 / 3</div>
            <img src='../images/testimage.jpg' style='width:100%'>
            <div class='text'>Karte</div>
        </div>

        <a class='prev' onclick='plusSlides(-1)'>&#10094;</a>
        <a class='next' onclick='plusSlides(1)'>&#10095;</a>
    </div>

    <br>

    <div style='text-align:center'>
        <span class='dot' onclick='currentSlide(1)'></span>
        <span class='dot' onclick='currentSlide(2)'></span>
        <span class='dot' onclick='currentSlide(3)'></span>
    </div>

    <div class='footer'>
        <ul>
            <li style='float:left'><a>© S. Ackermann 2021</a></li>
            <li><a href='impressum.php'>Impressum</a></li>
            <li><a href='contact.php'>Kontakt</a></li>
            <li><a href='sources.php'>Quellen</a></li>
        </ul>
    </div>

    <script src='../Javascript/slideshow.js'></script>
    
</body>

</html>