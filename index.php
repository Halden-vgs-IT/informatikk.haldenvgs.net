<!DOCTYPE html>
<html lang="no">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,JavaScript,PHP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ======= -->
    <!-- General -->
    <title>Informatikk</title>
    <link rel="icon" href="favicon-vgs.svg">
    <!-- ===== -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- ======= -->
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js"></script>
    <script src="https://unicons.iconscout.com/release/v3.0.3/script/monochrome/bundle.js"></script>
    <script src="javascript/rellax.min.js"></script>
    <script src="javascript/rellax.js"></script>
    <!-- =========== -->
    <!-- Stylesheets -->
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/unicons.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.3/css/line.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.3/css/solid.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body id="scroll">

    <!-- Header -->
    <header id="header">

        <!-- Title -->
        <div class="header-title-wrapper">
            <h1 class="header-title">Hvorfor velge IT?</h1>

            <!-- Button -->
            <div class="header-button-wrapper">
                <button id="start" class="header-button">
                    Start Presentasjon
                    <div class="header-button-inner"></div>
                </button>
            </div>
        </div>

        <!-- Scroll icon -->
        <p class="header-icon"><i class="uil uil-mouse-alt"></i></p>

        <!-- Background -->
        <div class="header-overlay"></div>
        <img class="header-img rellax" data-rellax-speed="-7" src="https://images.unsplash.com/photo-1480365501497-199581be0e66?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" alt="">

    </header>

    <!-- Main -->
    <main>

        <!-- Column 1 -->
        <div id="col1" class="column">

            <!-- Slider -->
            <div class="slide-wrapper">
                <div class="slides-container">
                    <div class="slide-image">
                        <div id="play-w1" class="play-wrapper">
                            <a id="play1" class="play"><i class="uil uil-caret-right"></i></a>
                        </div>
                        <div class="slide-overlay"></div>
                        <video id="video1" preload="auto">
                            <source src="videos/intro.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="slide-image">
                        <div id="play-w2" class="play-wrapper">
                            <a id="play2" class="play"><i class="uil uil-caret-right"></i></a>
                        </div>
                        <div class="slide-overlay"></div>
                        <video id="video2" preload="auto">
                            <source src="videos/annet.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="slide-image">
                        <div id="play-w3" class="play-wrapper">
                            <a id="play3" class="play"><i class="uil uil-caret-right"></i></a>
                        </div>
                        <div class="slide-overlay"></div>
                        <video id="video3" preload="auto">
                            <source src="videos/kreativitet.mp4" type="video/webM">
                        </video>
                    </div>
                </div>
                <div class="navigation-dots"></div>
            </div>

        </div>

        <!-- Column 2 -->
        <div id="col2" class="column">

            <div class="grid">
                <div class="image-wrapper">
                    <div id="play-w4" class="play-wrapper">
                        <a id="play4" class="play"><i class="uil uil-caret-right"></i></a>
                    </div>
                    <video id="video4" class="image" loop preload="auto">
                        <source src="videos/2020-10-28%2016-13-09-compressed.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="text-wrapper">
                    <h2>Hva jobber du med på IT1?</h2>
                    <p>Her i IT – 1 jobber man med hovedsakelig det man ikke ser på en nettside. Det er jobb med å lagre data i en database.
                        Dette gjør det mulig å lagre brukernavn og passord til sine nettsider og laste opp profilbilder som man kan se i eksempelet her.
                    </p>
                </div>
            </div>

        </div>

        <!-- Column 3 -->
        <div id="col3" class="column">

            <div class="grid">
                <div class="image-wrapper">
                    <div id="play-w5" class="play-wrapper">
                        <a id="play5" class="play"><i class="uil uil-caret-right"></i></a>
                    </div>
                    <video id="video5" class="image" loop preload="auto">
                        <source src="videos/2020-10-28%2016-16-59-compressed.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="text-wrapper">
                    <h2>Hva jobber du med på IT2?</h2>
                    <p>I IT-2 jobber man med utvikling og planlegging av sider.
                        Man jobber spesielt med hvordan nettsider og multimedieproduksjon skal se ut og hvordan man lager dette interaktivt.
                        Man jobber mye med det visuelle på nettsider som animasjoner og knapper som gir en respons.
                        Om du ser på eksempelet kan du se noe av det som er lagd av en elev tidligere i år.
                    </p>
                </div>
            </div>

        </div>

        <!-- Column 3 -->
        <div id="col4" class="column">
            <div class="oppgave">
                <div class="opgtext-wrapper">
                    <h2>Oppgave</h2>
                    <p>Knappen nedenfor tar deg til oppgaven. På siden får du hjelp og info om oppgaven.</p>
                    <!-- Button -->
                    <div class="header-button-wrapper">
                        <a href="oppgave/" target="_blank">
                            <button class="header-button">
                                Gå til oppgaven
                                <div class="header-button-inner"></div>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </main>

</body>
<script>

    // Accepts any class name
    var rellax = new Rellax('.rellax');

</script>
<script src="javascript/script.js"></script>
<script src="javascript/slider.js"></script>
</html>