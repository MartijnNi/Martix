<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../Content/Matrix-Brackets-logo-transparant.png" type="image/x-icon">
    <link rel="stylesheet" href="../navbar/navbar.css">
    <link rel="stylesheet" href="about.css">
    <title>Martix | About</title>
</head>

<body>
    <?php include '../navbar/navbar.php'; ?>
    <div class="screen2Container">
        <div class="layoutContainer">
            <div class="left">
                <p class="leftTitel">Playlist</p>
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/2Hux834asVYV5U7h0ApNSk?utm_source=generator&theme=0" width="100%" height="100%" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>
            <div class="middel">
                <p class="middelTitel">Spotlight</p>
                <iframe width="100%" height="100%" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1544426602&color=%236a5a50&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
            </div>
            <div class="right">
                <p class="leftTitel">Playlist</p>
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/3iPDPGtO20yHlKJ9B6OX85?utm_source=generator&theme=0" width="100%" height="100%" frameBorder="0" allowfullscreen="" allow="false ; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <div class="screen2Container">
        <div class="titelBar2">
            <p>Events</p>
        </div>
        <div class="calender">
            <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23009688&ctz=Europe%2FAmsterdam&showCalendars=0&showTabs=1&showPrint=0&showDate=1&showNav=1&src=MDgwYTRhMzJkOWExMzExZDYwOTUwNWM3OTlhYTJjZWI5NTU1NzU1MDA1ZWQ4OTc0Mzk0YWNhMWY5NjI0MzQ1N0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%23D50000" style="border:solid 1px #777" width="auto" height="auto" frameborder="0" scrolling="no"></iframe>
        </div>
    </div>

    <div class="screen3Container">
        <div class="titelBar3">
            <p>Live streams</p>
        </div>
        <div class="carousel">
            <div class="carousel-slide active">
                <iframe src="https://www.youtube.com/embed/F0ccxDjEE3E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="carousel-slide">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Z07c_sJiT2Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <div class="carousel-button" id="prevBtn">Previous</div>
        <div class="carousel-button" id="nextBtn">Next</div>
    </div>



</body>
<script src="../navbar/navMenu.js"></script>
<script src="./aboutBackgroundParticels.js"></script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>

</html>