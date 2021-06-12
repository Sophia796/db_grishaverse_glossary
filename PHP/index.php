<?php 
$site_name = 'Grishaverse-Datenbank: Startseite';
include ('header.inc.php'); 
include ('navbar.inc.php');
?>

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
            <div class='numbertext'>1 / 4</div>
            <img src='../images/testimage.jpg' style='width:100%'> 
            <div class='text'>Das Grishaverse</div>
        </div>
        <div class='mySlides fade'>
            <div class='numbertext'>2 / 4</div>
            <img src='../images/testimage.jpg' style='width:100%'>
            <div class='text'>Leigh Bardugo</div>
        </div>
        <div class='mySlides fade'>
            <div class='numbertext'>3 / 4</div>
            <img src='../images/testimage.jpg' style='width:100%'>
            <div class='text'>Glossar</div>
        </div>

        <div class='mySlides fade'>
            <div class='numbertext'>4 / 4</div>
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
        <span class='dot' onclick='currentSlide(4)'></span>
    </div>

    <script src='../Javascript/slideshow.js'></script>

<?php include ('footer.inc.php'); ?>