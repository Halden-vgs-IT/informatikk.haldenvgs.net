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
    <link rel="icon" href="">
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

            <div class="grid">
                <div class="image-wrapper">
                    <img class="image" src="https://images.unsplash.com/photo-1551852121-6ba2913274a1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2134&q=80" alt="">
                </div>
                <div class="text-wrapper">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>

        </div>

        <!-- Column 2 -->
        <div id="col2" class="column">

            <!-- Slider -->
            <div class="slide-wrapper">
                <div class="slides-container">
                    <div class="slide-image">
                        <!-- Title Box -->
                        <div class="slide-title">
                            <h1>Slide 1</h1>
                            <p>Dette er den første sliden</p>
                        </div>
                        <div class="slide-overlay"></div>
                        <img src="https://images.unsplash.com/photo-1586168760404-88c157666deb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1001&q=80" alt="" />
                    </div>
                    <div class="slide-image">
                        <div class="slide-title">
                            <h1>Slide 2</h1>
                            <p>Dette er den andre sliden</p>
                        </div>
                        <div class="slide-overlay"></div>
                        <img src="https://images.unsplash.com/photo-1599335727546-450eb6753648?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" alt="" />
                    </div>
                    <div class="slide-image">
                        <div class="slide-title">
                            <h1>Slide 3</h1>
                            <p>TDette er den tredje sliden</p>
                        </div>
                        <div class="slide-overlay"></div>
                        <img src="https://images.unsplash.com/photo-1578553137229-6bfe67ef1dd6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" alt="" />
                    </div>
                    <div class="slide-image">
                        <div class="slide-title">
                            <h1>Slide 4</h1>
                            <p>Dette er den fjerde sliden</p>
                        </div>
                        <div class="slide-overlay"></div>
                        <img src="https://images.unsplash.com/photo-1526336024174-e58f5cdd8e13?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="" />
                    </div>
                </div>
                <div class="navigation-dots"></div>
            </div>

        </div>

        <!-- Column 3 -->
        <div id="col3" class="column">
            <h3>Oppgave</h3>
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