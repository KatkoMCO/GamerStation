<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front-End Project First Part</title>

    <!-- Bootstrap links/version -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" crossorigin="anonymous">
    </script>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;500&family=Quicksand:wght@400;600&display=swap"
        rel="stylesheet">

    <!--ICONS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <!--stylesheet -->
    <link rel="stylesheet" href="./css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/specificevent.css" rel="stylesheet">

</head>

<body class="background-colour">

    <!----------------------------------------HEADER---------------------------------------->
    <!---------------------TOP BAR--------------------->
    <nav class="navbar navbar-expand-lg navbar-light top-bar top-bar-color">

        <!--LOGO-->
        <a href="./index.php"><img src="imgs/LOGO.png" alt=""></a>

        <!--MENU HAMBURGUESA-->
        <button class="navbar-toggler menu-mob" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
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
                    <a class="nav-link top-nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
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
                <input class="form-control input-search" type="search" placeholder="Search" aria-label="Search">
                <button class="search-btn" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <!------------------------------------EVENT------------------------------------>
    <section>

        <img class="spec-img-container mobile" src="./imgs/blank picture.png" alt="">

        <div class="specific-event-section">

            <!--MOBILE VIEW-->
            <div class="mobile">
                <h2 class="specific-event-title">TITLE</h2>
                <p class="specific-info-text">PRICE</p>
                <p class="specific-info-text">PLACE</p>
                <p class="specific-info-text">AUDIENCE</p>
                <p class="specific-info-text">DATE</p>
                <div class="hastags-container">
                    <a class="id-hastag" href="./category.php">#Youtubers</a>
                    <a class="id-hastag" href="./category.php">#PvP</a>
                </div>

                <div class="btn-container">
                    <!--BOTON QUE ABRE LOS MODALS-->
                    <a class="general-btns" data-bs-toggle="modal" href="#registerModalToggle" role="button">REGISTER NOW</a>
                </div>
            </div>

            <!--WEB VIEW-->
            <div class="card horizontal-card desktop">
                <div class="row g-0">
                    <!--IMAGEN-->
                    <div class="col-md-4 col-height img-col-width">
                        <img class="img-card-container" src="./imgs/blank picture.png" alt="">
                    </div>
                    <!--INFO-->
                    <div class="col col-height">
                        <div class="card-body">
                            <h2 class="specific-event-title">TITLE</h2>
                            <p class="specific-info-text">PRICE</p>
                            <p class="specific-info-text">PLACE</p>
                            <p class="specific-info-text">AUDIENCE</p>
                            <p class="specific-info-text">DATE</p>
                            <div class="hastags-container">
                                <a class="id-hastag" href="./category.php">#Youtubers</a>
                                <a class="id-hastag" href="./category.php">#PvP</a>
                            </div>

                            <div class="btn-container">
                                <!--BOTON QUE ABRE LOS MODALS-->
                                <a class="general-btns" data-bs-toggle="modal" href="#registerModalToggle"
                                    role="button">REGISTER
                                    NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--MODAL POPUP FORM-->
            <div>
                <!--------------------------------FIRST MODAL-------------------------------->
                <div class="modal fade" id="registerModalToggle" aria-hidden="true"
                    aria-labelledby="registerModalToggleLabel" tabindex="-1">

                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content modal-appereance">
                            <div class="modal-header">
                                <h3 class="modal-title" id="registerModalToggleLabel">REGISTER</h3>
                                <button type="button" class="fas fa-times mob-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <div class="modal-body modal-info">
                                <h4 class="modal-type-title">DETAILS</h4>

                                <div class="container">
                                    <div class="grid-wrapper-register">
                                        <div>
                                            <h5 class="modals-subtitles">Cost per person</h5>
                                            <p class="modals-text">Kids: $$$ or free</p>
                                            <p class="modals-text">Adults: $$$ or free</p>
                                        </div>
                                        <div>
                                            <h5 class="modals-subtitles">Total</h5>
                                            <p class="modals-text">Participants: #</p>
                                            <p class="modals-text">Cost: $$$ or free</p>
                                        </div>
                                    </div>

                                    <div>
                                        <div>
                                            <h5 class="fields-title">FIELDS LEFT</h5>
                                        </div>
                                        <div class="fields-box participants-register">
                                            <p class="fields-num">200</p>
                                        </div>

                                        <div class="participants-register modal-checkbox">
                                                Adults
                                        </div>
                                        <div class="participants-register">
                                            <select class="num-participants-select" id="inputGroupSelect01">
                                                <option class="options-participants" selected>Choose...</option>
                                                <option class="options-participants" value="1">1</option>
                                                <option class="options-participants" value="2">2</option>
                                                <option class="options-participants" value="3">3</option>
                                                <option class="options-participants" value="3">4</option>
                                                <option class="options-participants" value="3">5</option>
                                            </select>
                                        </div>
                                        
                                        <div class="participants-register">
                                            <label class="list-group-item modal-checkbox">
                                                <input class="form-check-input me-1 modal-checker" type="checkbox"
                                                    value="">
                                                Kids
                                            </label>
                                        </div>
                                        <div class="participants-register">
                                            <select class="num-participants-select" id="inputGroupSelect01">
                                                <option class="options-participants" selected>Choose...</option>
                                                <option class="options-participants" value="1">1</option>
                                                <option class="options-participants" value="2">2</option>
                                                <option class="options-participants" value="3">3</option>
                                                <option class="options-participants" value="3">4</option>
                                                <option class="options-participants" value="3">5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button class="btn general-btns" data-bs-target="#confirmModalToggle"
                                    data-bs-toggle="modal" data-bs-dismiss="modal">REGISTER TO EVENT</button>
                            </div>
                        </div>
                    </div>
                </div>


                <!--------------------------------SECOND MODAL-------------------------------->
                <div class="modal fade" id="confirmModalToggle" aria-hidden="true"
                    aria-labelledby="confirmModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content modal-appereance">
                            <div class="modal-header">
                                <h3 class="modal-title" id="confirmModalToggle">CONFIRM</h3>
                                <button type="button" class="fas fa-times mob-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body modal-info">

                                <h4 class="modal-type-title">BASIC INFORMATION</h4>


                                <div class="container">
                                    <h5 class="confirm-sub-title">Full Name</h5>
                                    <form action="">
                                        <input class="input-fields-confirm" type="text" placeholder="Name">
                                    </form>

                                    <h5 class="confirm-sub-title">Email</h5>
                                    <form action="">
                                        <input class="input-fields-confirm" type="text" placeholder="Email">
                                    </form>
                                </div>



                            </div>
                            <div class="modal-footer">
                                <button class="btn  general-btns" data-bs-target="#finishModalToggle"
                                    data-bs-toggle="modal" data-bs-dismiss="modal">FINISH</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--------------------------------THIRD MODAL-------------------------------->
                <div class="modal fade" id="finishModalToggle" aria-hidden="true"
                    aria-labelledby="finishModalToggleLabel" tabindex="-1">

                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content modal-appereance">
                            <div class="modal-header">
                                <h3 class="modal-title" id="finishModalToggleLabel">THANKS FOR REGISTERING!</h3>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn  general-btns" data-bs-dismiss="modal">CLOSE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!---------SCROLL BOX--------->
            <div class="box-content">
                <div class="scroll">
                    <p class="box-text">
                        This is some placeholder content for the scrollspy page. Note that as you scroll down the page,
                        the appropriate navigation link is highlighted. It's repeated throughout the component example.
                        We keep adding some more example copy here to emphasize the scrolling and highlighting.This is
                        some placeholder content for the scrollspy page. Note that as you scroll down the page, the
                        appropriate navigation link is highlighted. It's repeated throughout the component example. We
                        keep adding some more example copy here to emphasize the scrolling and highlighting.This is some
                        placeholder content for the scrollspy page. Note that as you scroll down the page, the
                        appropriate navigation link is highlighted. It's repeated throughout the component example. We
                        keep adding some more example copy here to emphasize the scrolling and highlighting. This is some 
                        placeholder content for the scrollspy page. Note that as you scroll down the page,
                        the appropriate navigation link is highlighted. It's repeated throughout the component example.
                        We keep adding some more example copy here to emphasize the scrolling and highlighting.This is
                        some placeholder content for the scrollspy page. Note that as you scroll down the page, the
                        appropriate navigation link is highlighted. It's repeated throughout the component example. We
                        keep adding some more example copy here to emphasize the scrolling and highlighting.This is some
                        placeholder content for the scrollspy page. Note that as you scroll down the page, the
                        appropriate navigation link is highlighted. It's repeated throughout the component example. We
                        keep adding some more example copy here to emphasize the scrolling and highlighting.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!----------------------------------SIMILAR EVENTS---------------------------------->
    <section class="similar-events-section">

        <h2 class="similar-event-title">SIMILAR EVENTS</h2>

        <!---------CAROUSEL WITH VARIOUS PICTURES--------->
        <div id="carouselExampleIndicators" class="carousel carousel-space slide" data-bs-ride="carousel">

            <!--CAROUSEL-->
            <div class="carousel-inner">

                <!--FIRST 3 PICTURE CARDS-->
                <div class="carousel-item active">
                    <div class="grid-wrapper-spec-event">
                        <div class="sim-event-imgs">
                            <!--IMAGE WITH LINK-->
                            <a href="./specificevent.php">
                                <img class="grid-pics-spec-event" src="./imgs/event9.jpg" alt="event">
                            </a>
                        </div>

                        <div class="sim-event-imgs">
                            <!--IMAGE WITH LINK-->
                            <a href="./specificevent.php">
                                <img class="grid-pics-spec-event" src="./imgs/event5.jpg" alt="event">
                            </a>
                        </div>

                        <div class="sim-event-imgs">
                            <!--IMAGE WITH LINK-->
                            <a href="./specificevent.php">
                                <img class="grid-pics-spec-event" src="./imgs/event6.jpg" alt="event">
                            </a>
                        </div>
                    </div>

                </div>

                <!--SECOND 3 PICTURE CARDS-->
                <div class="carousel-item">

                    <div class="grid-wrapper-spec-event">
                        <div class="sim-event-imgs">
                            <!--IMAGE WITH LINK-->
                            <a href="./specificevent.php">
                                <img class="grid-pics-spec-event" src="./imgs/event7.jpg" alt="event">
                            </a>
                        </div>

                        <div class="sim-event-imgs">
                            <!--IMAGE WITH LINK-->
                            <a href="./specificevent.php">
                                <img class="grid-pics-spec-event" src="./imgs/event4.jpg" alt="event">
                            </a>
                        </div>

                        <div class="sim-event-imgs">
                            <!--IMAGE WITH LINK-->
                            <a href="./specificevent.php">
                                <img class="grid-pics-spec-event" src="./imgs/event10.jpg" alt="event">
                            </a>
                        </div>
                    </div>

                </div>

                <!-- THIRD 3 PICTURE CARDS -->
                <div class="carousel-item">

                    <div class="grid-wrapper-spec-event">
                        <div class="sim-event-imgs">
                            <!--IMAGE WITH LINK-->
                            <a href="./specificevent.php">
                                <img class="grid-pics-spec-event" src="./imgs/event3.jpg" alt="event">
                            </a>
                        </div>

                        <div class="sim-event-imgs">
                            <!--IMAGE WITH LINK-->
                            <a href="./specificevent.php">
                                <img class="grid-pics-spec-event" src="./imgs/event1.jpg" alt="event">
                            </a>
                        </div>

                        <div class="sim-event-imgs">
                            <!--IMAGE WITH LINK-->
                            <a href="./specificevent.php">
                                <img class="grid-pics-spec-event" src="./imgs/event2.jpg" alt="event">
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <!--CAROUSEL INDICATORS-->
            <div class="carousel-indicators car-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <!--PREV AND NEXT BUTTONS-->
            <!--PREV-->
            <button class="carousel-control-prev car-left-btn" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="fas fa-chevron-left" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <!--NEXT-->
            <button class="carousel-control-next car-right-btn" type="button"
                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="fas fa-chevron-right" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
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