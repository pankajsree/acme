<?php
    require("common/common.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Catalogue | Acme Solutions | Agartala</title>
        <?= $head ?>
        <link rel="stylesheet" href="assets/css/lightbox.min.css" />
    </head>
    <body>
        <?= $nav ?>

        <main id="catalogue-page">
            <div class="container">
                <div class="strike-heading">
                    <div class="strike-line"></div>
                    <h1>Catalogue</h1>
                </div>
                <!-- <div class="row pdf">
                    <div class="col-12">
                        <a href="docs/catalogue.pdf" target="_blank">
                            <i class="far fa-file-pdf"></i><br />
                            Catalogue File
                        </a>
                    </div>
                </div> -->
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="img-container">
                            <a href="assets/images/catalogue/1.jpg" data-lightbox="catalogue"><img src="assets/images/catalogue/1.jpg" class="img-res" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="img-container">
                            <a href="assets/images/catalogue/1.jpg" data-lightbox="catalogue"><img src="assets/images/catalogue/1.jpg" class="img-res" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="img-container">
                            <a href="assets/images/catalogue/1.jpg" data-lightbox="catalogue"><img src="assets/images/catalogue/1.jpg" class="img-res" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="img-container">
                            <a href="assets/images/catalogue/1.jpg" data-lightbox="catalogue"><img src="assets/images/catalogue/1.jpg" class="img-res" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="img-container">
                            <a href="assets/images/catalogue/1.jpg" data-lightbox="catalogue"><img src="assets/images/catalogue/1.jpg" class="img-res" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="img-container">
                            <a href="assets/images/catalogue/1.jpg" data-lightbox="catalogue"><img src="assets/images/catalogue/1.jpg" class="img-res" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="img-container">
                            <a href="assets/images/catalogue/1.jpg" data-lightbox="catalogue"><img src="assets/images/catalogue/1.jpg" class="img-res" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="img-container">
                            <a href="assets/images/catalogue/1.jpg" data-lightbox="catalogue"><img src="assets/images/catalogue/1.jpg" class="img-res" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?= $footer ?>
        <?= $script ?>
        <script src="assets/js/lightbox-plus-jquery.min.js"></script>
    </body>
</html>
