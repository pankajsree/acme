<?php
    require("common/common.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Acme Solutions | Agartala</title>
        <?= $head ?>
        <link rel="stylesheet" href="assets/css/home.css" />
    </head>
    <body>
        <?= $nav ?>
        <main>
            <div id="banner">
                <div class="message">
                    <div class="smaller">some</div>
                    nice message<br />
                    <a href="contact">Contact us</a>
                </div>
            </div>
            <div class="banner-content">
                <div class="container">
                    <div class="row content">
                        <div class="col-5 left">
                            <div class="text-small">Lorem ipsum</div>
                            <div class="text-large">Lorem ipsum dolor sit amet</div>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-5 right">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                    </div>
                </div>
            </div>

            <div id="resource-activity" class="container section">
                <div class="line"></div>
                <h2>Our Products</h2>
                <div class="row justify-content-center font-3-600">
                    <div class="division col-12 col-md-6 col-lg-4">
                        <div class="stuff">
                            <img class="img-res" src="assets/images/water-purifier.jpg" alt="">
                            <h4 class="heading"><span class="b-b-black pad-btm-0-5">Water Purifier</span></h4>
                            <div class="text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>
                        </div>
                        <div class="show-more">
                            <a href="anti-ragging">Read More&nbsp;&gt;&gt;<div class="underline"></div></a>
                        </div>
                    </div>

                    <div class="division col-12 col-md-6 col-lg-4">
                        <div class="stuff">
                            <img class="img-res" src="assets/images/kitchen-chimney.jpg" alt="">
                            <h4 class="heading"><span class="b-b-black pad-btm-0-5">Kitchen Chimney</span></h4>
                            <div class="text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>
                        </div>
                        <div class="show-more">
                            <a href="anti-ragging">Read More&nbsp;&gt;&gt;<div class="underline"></div></a>
                        </div>
                    </div>

                    <div class="division col-12 col-md-6 col-lg-4">
                        <div class="stuff">
                            <img class="img-res" src="assets/images/iron-removal.png" alt="">
                            <h4 class="heading"><span class="b-b-black pad-btm-0-5">Iron Removal Plant</span></h4>
                            <div class="text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>
                        </div>
                        <div class="show-more">
                            <a href="anti-ragging">Read More&nbsp;&gt;&gt;<div class="underline"></div></a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="today-special" class="container section">
                <div class="line"></div>
                <h2>Latest Products</h2>
                <div id="latest-carousel"  class="carousel slide mar-t-2">
                    <ul class="carousel-indicators">
                        <li data-target="#latest-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#latest-carousel" data-slide-to="1"></li>
                        <li data-target="#latest-carousel" data-slide-to="2"></li>
                        <li data-target="#latest-carousel" data-slide-to="3"></li>
                    </ul>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="img-container">
                                <img src="assets/images/carousel/purifier.jpg" title="" alt="" />
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="img-container">
                                <img src="assets/images/carousel/chimney.jpg" title="" alt="" />
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="img-container">
                                <img src="assets/images/carousel/purifier.jpg" title="" alt="" />
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="img-container">
                                <img src="assets/images/carousel/chimney.jpg" title="" alt="" />
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-next" href="#latest-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div id="trending" class="container section">
                <div class="line"></div>
                <h2>On Sale Products</h2>
                <div id="sale-carousel"  class="carousel slide mar-t-2">
                    <ul class="carousel-indicators">
                        <li data-target="#sale-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#sale-carousel" data-slide-to="1"></li>
                        <li data-target="#sale-carousel" data-slide-to="2"></li>
                        <li data-target="#sale-carousel" data-slide-to="3"></li>
                    </ul>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="img-container">
                                <img src="assets/images/carousel/purifier.jpg" title="" alt="" />
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="img-container">
                                <img src="assets/images/carousel/chimney.jpg" title="" alt="" />
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="img-container">
                                <img src="assets/images/carousel/purifier.jpg" title="" alt="" />
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="img-container">
                                <img src="assets/images/carousel/chimney.jpg" title="" alt="" />
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-next" href="#sale-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div id="about-us" class="container section">
                <div class="line"></div>
                <h2>Reach Us</h2>
                <!-- <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div> -->
            </div>

            <div class="container">
                <div id="map"></div>
            </div>
        </main>

        <?= $footer ?>
        <?= $script ?>
        <script>
            $("#nav-home").addClass("active");
        </script>
        <script src="assets/js/home.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCq8x9xnqp6xJrmvFCqavA75KTG4wK9WaU&callback=initMap" type="text/javascript"></script>

    </body>
</html>
