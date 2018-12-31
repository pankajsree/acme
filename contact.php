<?php
    require("common/common.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contact | Acme Solutions | Agartala</title>
        <?= $head ?>
    </head>
    <body>
        <?= $nav ?>

        <main id="contact-page">
            <div class="container-fluid">
                <div class="strike-heading">
                    <div class="strike-line"></div>
                    <h1>Contact Us</h1>
                </div>
                <h3 class="message">Let&apos;s not be strangers</h3>
                <div class="row sec-container">
                    <div class="col-12 col-md-4 sec-1">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="d-inline-block text-left">
                                    <div class="heading">
                                        <span class="b-b-white">Meet us</span>
                                    </div>
                                    <a href="tel:525">
                                        <i class="fas fa-phone"></i>&nbsp;+91-381-2225465
                                    </a><br />
                                    <a href="mailto:acme.solutions@gmail.com">
                                        <i class="far fa-envelope"></i>&nbsp;acme.solutions@gmail.com
                                    </a><br />
                                    <i class="fas fa-map-marker-alt"></i>&nbsp;Ramnagar - 6, Agartala<br />
                                    Tripura, India - 799001
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 sec-2">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="d-inline-block text-left">
                                    <div class="heading">
                                        <span class="b-b-black">Corporate Address</span>
                                    </div>
                                    <!-- <i class="fas fa-map-marker-alt"></i>&nbsp; -->
                                    Ramnagar - 6, Agartala<br />
                                    Santi More, Atul Prasad Sarani<br />
                                    Hakim Para Siliguri<br />
                                    Tripura, India - 799001
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 sec-3">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="d-inline-block text-left">
                                    <div class="heading">
                                        <span class="b-b-white">Social Activity</span>
                                    </div>
                                    <a href="#">
                                        <i class="fab fa-facebook"></i>&nbsp;acmesolutions18
                                    </a><br />
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>&nbsp;acmesolutions18
                                    </a><br />
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>&nbsp;acmesolutions18
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="container">
                <div id="map"></div>
            </div>
        </main>

        <?= $footer ?>
        <?= $script ?>
        <script>
            function initMap() {
                var location = {lat: 23.840836, lng: 91.267833};
                var map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 18,
                    center: location
                });
            }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCq8x9xnqp6xJrmvFCqavA75KTG4wK9WaU&callback=initMap" type="text/javascript"></script>
    </body>
</html>
