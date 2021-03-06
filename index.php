<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GAMERSTATION</title>

    <!-- Bootstrap links/version -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" crossorigin="anonymous">
    </script>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;500&family=Quicksand:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- MENU ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <!-- Main stylesheet -->
    <link rel="stylesheet" href="./css/style.css" rel="stylesheet">
</head>

<body>
    <!----------------------------------------HEADER---------------------------------------->
    <!---------------------TOP BAR--------------------->
    <section class="container-fluid">
        <!--START CAROUSEL-->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./imgs/HEADER.jpg" class="d-block w-100 carousel-pics" alt="...">
                </div>
                <div class="carousel-item carousel-pics">
                    <img src="./imgs/HEADER.jpg" class="d-block w-100 carousel-pics" alt="...">
                </div>
                <div class="carousel-item carousel-pics">
                    <img src="./imgs/HEADER.jpg" class="d-block w-100 carousel-pics" alt="...">
                </div>

                <!--START OF TOP BAR AND HEADER-->
                <nav class="navbar navbar-expand-lg navbar-light top-bar">

                    <!--LOGO-->
                    <a href="./index.php"><img src="imgs/LOGO.png" alt=""></a>

                    <!--MENU HAMBURGUESA-->
                    <button class="navbar-toggler menu-mob" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fas fa-bars"></span>
                    </button>

                    <!------------------------DESPLEGABLE MENU---------------------------->
                    <div class="collapse navbar-collapse top-nav-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav nav-space me-auto mb-2 mb-lg-0">

                            <!--OPCIONES DE MENU-->
                            <li class="nav-item">
                                <a class="nav-link top-nav-link active" aria-current="page" href="./index.php">Home</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link top-nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Categories
                                </a>
                                <ul class="dropdown-menu dropdown-box" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item top-dropdown-item" href="./category.php">Youtubers</a></li>
                                    <li><a class="dropdown-item top-dropdown-item" href="./category.php">PvP</a></li>
                                    <li><a class="dropdown-item top-dropdown-item" href="./category.php">Shooters</a></li>
                                    <li><a class="dropdown-item top-dropdown-item" href="./category.php">Multiplayer</a></li>
                                    <li><a class="dropdown-item top-dropdown-item" href="./category.php">Fight</a></li>
                                    <li><a class="dropdown-item top-dropdown-item" href="./category.php">E3</a></li>
                                    <li><a class="dropdown-item top-dropdown-item" href="./category.php">E-Sports</a></li>
                                    <li><a class="dropdown-item top-dropdown-item" href="./category.php">Horror</a></li>
                                    <li><a class="dropdown-item top-dropdown-item" href="./category.php">RPG</a></li>
                                    <li><a class="dropdown-item top-dropdown-item" href="./category.php">Blizzcon</a></li>
                                    <li><a class="dropdown-item top-dropdown-item" href="./category.php">Sumer Game Fest</a></li>
                                    <li><a class="dropdown-item top-dropdown-item" href="./category.php">GDC</a></li>
                                    <li><a class="dropdown-item top-dropdown-item" href="./category.php">Ubisoft Forward</a></li>
                                    <li><a class="dropdown-item top-dropdown-item" href="./category.php">Nintendo Direct</a></li>

                                    <li>
                                </ul>
                            </li>
                        </ul>

                        <!--TEXT FIELD SEARCH-->
                        <form class="d-flex search-container">
                            <input class="form-control input-search" type="search" placeholder="Search"
                                aria-label="Search">
                            <button class="search-btn" type="submit">Search</button>
                        </form>
                    </div>
                </nav>

                <!---------------------HEAD TEXT--------------------->
                <header class="header-section">
                    <h1 class="head-text">
                        YOUR FAVORITE GAMER EVENTS
                    </h1>
                    <span class="line-header"></span>
                    <h1 class="head-text">
                        UNITED IN ONE PLACE
                    </h1>
                </header>
            </div>
            <!--FIN CAROUSEL INNER-->
        </div>
        <!--FIN CAROUSEL-->

    </section>

    <!---------------------------------------SEASON--------------------------------------->
    <section class="season-section">

        <!---------TITLE--------->
        <h2 class="season-title">
            EVENT OF THE SEASON
        </h2>
        <span class="line-season"></span>

        <!---------CARD SEASON EVENT--------->
        <div class="card horizontal-card">
            <div class="row g-0">
                <!--IMAGEN-->
                <div class="col-md-4 col-height img-col-width">
                    <img class="img-card-container" src="./imgs/SEASONEVENT.jpg" alt="">
                </div>
                <!--INFO-->
                <div class="col col-height">
                    <div class="card-body info-event-content">
                        <h3 class="season-event-title">E3 WINTER'S SPECIAL</h3>

                        <p class="season-time">Time Left: 2:24:37:08</p>
                        <div class="hastags-container">
                            <a class="id-hastag" href="./category.php">#Youtubers</a>
                            <a class="id-hastag" href="./category.php">#PvP</a>
                        </div>
                        <p class="season-description"><small class="text-muted">Last updated 3 mins ago</small></p>

                        <p class="season-description">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                        </p>

                        <!---------REGISTER BTN--------->
                        <div class="btn-container">
                            <a href="./specificevent.php" class="btn-season">REGISTER</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!---------------------------------------EVENTS--------------------------------------->
    <section class="event-section">
        <h2 class="event-title">OTHER EVENTS</h2>
        <span class="event-line"></span>
        <!---------EVENTS LIST PICS--------->
        <div class="grid-wrapper">
            <a class="large" href="./specificevent.php">
                <img class="grid-pics" src="./imgs/event1.jpg" alt="">
            </a>
            <!-------------------------------------------------->
            <a class="wide" href="./specificevent.php">
                <img class="grid-pics" src="./imgs/event2.jpg" alt="">
            </a>
            <a href="./specificevent.php">
                <img class="grid-pics" src="./imgs/event3.jpg" alt="">
            </a>
            <!-------------------------------------------------->
            <a href="./specificevent.php">
                <img class="grid-pics" src="./imgs/event4.jpg" alt="">
            </a>
            <a href="./specificevent.php">
                <img class="grid-pics" src="./imgs/event5.jpg" alt="">
            </a>
            <a href="./specificevent.php">
                <img class="grid-pics" src="./imgs/event6.jpg" alt="">
            </a>
            <!-------------------------------------------------->
            <a href="./specificevent.php">
                <img class="grid-pics" src="./imgs/event7.jpg" alt="">
            </a>
            <a href="./specificevent.php">
                <img class="grid-pics" src="./imgs/event8.jpg" alt="">
            </a>
            <a href="./specificevent.php">
                <img class="grid-pics" src="./imgs/event9.jpg" alt="">
            </a>
            <!-------------------------------------------------->
            <a class="large" href="./specificevent.php">
                <img class="grid-pics" src="./imgs/event10.jpg" alt="">
            </a>
        </div>
    </section>

    <!----------------------------------------FOOTER---------------------------------------->
    <footer class="footer-section">
        <div class="footer">
            <p class="year">Copyright ????? 2021 | gamerstation.com</p>
        </div>
    </footer>
</body>

</html>