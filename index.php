<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Plantito - Plant Create Peace</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Free Web tutorials">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta name="author" content="John Doe">

        <!-- FAVICON -->
        <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
        <link rel="icon" href="./assets/favicon.ico" type="image/x-icon">

        <!-- CSS -->
        <?php require($_SERVER['DOCUMENT_ROOT'].'/includes/include-common-css.php'); ?>
        <link rel="stylesheet" href="/dist/styles/index.css">
        <link rel="stylesheet" href="/dist/swiper/swiper-bundle.min.css">
        
        
        <!-- FONT AWESOME -->
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

        <style>
            .centered {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                }
            .size-cover{
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                }
            .swiper-container {
                width: 100%;
                padding-top: 50px;
                padding-bottom: 50px;
                }

                .swiper-slide {
                background-position: center;
                background-size: cover;
                width: 300px;
                height: 300px;

                }
            .text-palette-2{
                color:#69827FFF;
            }
            .text-palette-3{
                color: #7FA193FF;
            }
        </style>
    </head>
    <body>
        <?php require($_SERVER['DOCUMENT_ROOT'].'/components/navbar.php'); ?>        
        <!-- <div class="banner"></div> -->

        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image:url(./assets/7.png)"></div>
            <div class="swiper-slide" style="background-image:url(./assets/8.png)"></div>
            <div class="swiper-slide" style="background-image:url(./assets/9.png)"></div>
            <div class="swiper-slide" style="background-image:url(./assets/10.png)"></div>
            <div class="swiper-slide" style="background-image:url(./assets/11.png)"></div>
            <div class="swiper-slide" style="background-image:url(./assets/12.png)"></div>
            <div class="swiper-slide" style="background-image:url(./assets/13.png)"></div>
            <div class="swiper-slide" style="background-image:url(./assets/14.png)"></div>
            <div class="swiper-slide" style="background-image:url(./assets/15.png)"></div>
            <div class="swiper-slide" style="background-image:url(./assets/16.png)"></div>
            <div class="swiper-slide" style="background-image:url(./assets/17.png)"></div>
            <div class="swiper-slide" style="background-image:url(./assets/18.png)"></div>
            <div class="swiper-slide" style="background-image:url(./assets/19.png)"></div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>

        <main class="my-5">
            <div class="container">
                <!-- <h4 class="uk-heading-line uk-text-large uk-text-light "><span>LATEST ARTICLES</span></h4> -->
                <!-- <h3 class="text-center font-italic">LATEST ARTICLES</h3> -->
                <h4 class="uk-text-large uk-text-light text-center mb-1">LATEST ARTICLES</h4>
                <hr class="mx-auto mt-0" style="width: 5%; border: 1px solid #727471FF;">
                <br>
                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <div class="card shadow" uk-scrollspy="cls: uk-animation-fade; repeat: false">
                            <div class="uk-inline-clip uk-transition-toggle uk-height-medium" tabindex="0">
                                <img class="card-image-top" src="./assets/2.png" alt="">
                                <img class="uk-transition-scale-up uk-position-cover" src="./assets/3.png" alt="">
                            </div>
                            <div class="card-body">
                                <div class="p-4">
                                    <h6 class="uk-heading-line uk-text-center"><span>Heading Line</span></h6>
                                    <p class="card-text uk-text-small">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-4 mb-3">
                        <div class="card shadow" uk-scrollspy="cls: uk-animation-fade; repeat: false">
                            <div class="uk-inline-clip uk-transition-toggle uk-height-medium" tabindex="0">
                                <img class="card-image-top" src="./assets/3.png" alt="">
                                <img class="uk-transition-scale-up uk-position-cover" src="./assets/4.png" alt="">
                            </div>
                            <div class="card-body">
                                <div class="p-4">
                                    <h6 class="uk-heading-line uk-text-center"><span>Heading Line</span></h6>
                                    <p class="card-text uk-text-small">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-4 mb-3">
                        <div class="card shadow" uk-scrollspy="cls: uk-animation-fade; repeat: false">
                            <div class="uk-inline-clip uk-transition-toggle uk-height-medium" tabindex="0">
                                <img class="card-image-top" src="./assets/4.png" alt="">
                                <img class="uk-transition-scale-up uk-position-cover" src="./assets/5.png" alt="">
                            </div>
                            <div class="card-body">
                                <div class="p-4">
                                    <h6 class="uk-heading-line uk-text-center"><span>Heading Line</span></h6>
                                    <p class="card-text uk-text-small">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </main>
        <div class="container-fluid bg-white position-relative">
            <div class="row">
                <div class="col-sm-6 p-0 mb-3">
                    <div class="embed-responsive embed-responsive-4by3 uk-inline-clip uk-transition-toggle" tabindex="0">
                        <div class="size-cover embed-responsive-item uk-transition-scale-up uk-transition-opaque" style=" background-image: url('./assets/5.png')">
                     </div>
                   </div>
                    <!-- <div class="uk-cover-container uk-height-large">
                        <img src="./assets/2.png" alt="" uk-cover>
                    </div> -->
                    <!-- <img class="uk-height-medium" src="" alt=""> -->
                </div>
                <div class="col-sm-6 p-0 mb-3 position-relative d-flex align-items-center justify-content-center">
                    <div class="px-5 mx-5">
                        <h4 class="uk-text-large uk-text-light text-center mb-1">ABOUT</h4>
                        <hr class="mx-auto mt-0" style="width: 10%; border: 1px solid #727471FF;">
                        <p class="uk-text-small uk-text-light text-justify">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>         
                </div>
            </div>        
        </div>
        <div class="container-fluid bg-white py-5">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-sm-3 mb-3 d-flex justify-content-center align-items-center text-center">
                        <div>
                            <h1 class="font-weight-bold mb-0 text-palette-2" id="counter1">5612</h1>
                            <h5 class="mt-0 text-palette-2 text-uppercase">Page Visit</h5>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3 mb-3 d-flex justify-content-center align-items-center text-center">
                        <div>
                            <h1 class="font-weight-bold mb-0 text-palette-2" id="counter2">359</h1>
                            <h5 class="mt-0 text-palette-2 text-uppercase">Members</h5>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3 mb-3 d-flex justify-content-center align-items-center text-center">
                        <div>
                            <h1 class="font-weight-bold mb-0 text-palette-2" id="counter3">79</h1>
                            <h5 class="mt-0 text-palette-2 text-uppercase">Plants Species</h5>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3 mb-3 d-flex justify-content-center align-items-center text-center">
                        <div>
                            <h1 class="font-weight-bold mb-0 text-palette-2" id="counter4">2865</h1>
                            <h5 class="mt-0 text-palette-2 text-uppercase">Subscribers</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-5" style="background-color: #69827FFF">
            <div class="container py-5 d-flex align-items-center justify-content-center">
                <div class="col-10 col-sm-8 col-lg-6">
                    <h4 class="uk-text-large uk-text-light text-white text-center mb-1">SUBSCRIBE TO OUR NEWSLETTER</h4>
                    <hr class="mx-auto mt-0" style="width: 15%; border: 1px solid #ffffff;">
                    <input class="form-control form-control-lg border-0 rounded-0 text-muted uk-text-light" type="text" placeholder="Email Address">
                    <button class="btn btn-lg btn-outline-light rounded-0 d-block mx-auto mt-3 uk-text-light px-5">SUMBIT</button>
                </div>
            </div>
        </div>
        
        <?php require($_SERVER['DOCUMENT_ROOT'].'/components/footer.php'); ?>
        <?php require($_SERVER['DOCUMENT_ROOT'].'/includes/include-common-js.php'); ?>

        <!-- SWIPER -->
        <script src="/dist/swiper/swiper-bundle.min.js"></script>
        <!-- COUNT UP -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/countup.js/1.8.2/countUp.min.js'></script>
        
        <!-- SCRIPTS -->
        <script src="/dist/scripts/countup-script.js"></script>
        <script src="/dist/scripts/swiper-script.js"></script>
        
    </body>
</html>