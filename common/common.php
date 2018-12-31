<?php

    define('__ROOT__', "/acme");

    $head = "
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='shortcut icon' href='" . __ROOT__ . "/assets/images/logo/favicon.png' />
        <link href='https://fonts.googleapis.com/css?family=Aref+Ruqaa|Audiowide|EB+Garamond:400,500,600|Oleo+Script|Oleo+Script+Swash+Caps' rel='stylesheet'>
        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous' />
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
        <link rel='stylesheet' href='" . __ROOT__ . "/assets/css/common.css' />
    ";

    $nav = "
        <div class='header'>
            <div class='slice-1'>
                <div class='header-social'>
                    <a href='https://www.facebook.com/'><i class='fab fa-facebook-square'></i>&nbsp;acmesolutions18</a>
                    <a href='https://twitter.com/'><i class='fab fa-twitter'></i>&nbsp;acmesolutions18</a>
                    <a href='https://www.instagram.com/'><i class='fab fa-instagram'></i>&nbsp;acmesolutions18</a>
                    <a href='https://www.linkedin.com/'><i class='fab fa-linkedin'></i>&nbsp;acmesolutions18</a>
                </div>
            </div>
            <div class='slice-2'>
                <div class='co-name'>
                    <a href='" . __ROOT__ . "/'><img src='" . __ROOT__ . "/assets/images/banner-top-2.png' alt='Acme - Gives the Best' /></a>
                </div>
            </div>
            <div class='slice-3'>
                <div class='header-contact'>
                    <i class='fas fa-map-marker-alt'></i>&nbsp;Ramnagar&nbsp;-&nbsp;6, Agartala, Tripura(West), India&nbsp;-&nbsp;799001
                    <a class='mar-top-0-5' href='mailto:acme.solutions@gmail.com'><i class='far fa-envelope'></i>&nbsp;acme.solutions@gmail.com</a>
                    <a href='tel:+91-381-2264571'><i class='fas fa-phone'></i>+91-381-2264571</a>
                </div>
            </div>
        </div>


        <nav id='nav-1' class='navbar navbar-expand-lg navbar-light bg-light'>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navContent' aria-controls='navContent' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
            </button>

            <div class='collapse navbar-collapse justify-content-center' id='navContent'>
                <ul class='navbar-nav' id='nav-ul-1'>
                    <li id='nav-home' class='nav-item'>
                        <a class='nav-link' href='" . __ROOT__ . "/'>Home <span class='sr-only'>(current)</span></a>
                    </li>
                    <li id='nav-about' class='nav-item'>
                        <a class='nav-link' href='" . __ROOT__ . "/about'>About</a>
                    </li>
                    <li id='nav-products' class='nav-item dropdown item-level-0'>
                        <a class='nav-link dropdown-toggle' href='javascript:void(0);' id='navbarDropdown' role='button' data-toggle='dropdown'>
                        Products
                        </a>
                        <div class='dropdown-menu menu-level-0'>
                            <div class='nav-item dropright item-level-1'>
                                <a class='dropdown-item dropdown-toggle' role='button' data-toggle='dropdown' href='" . __ROOT__ . "/products/water-treatment/'>Water Treatment Plant</a>
                                <div class='dropdown-menu menu-level-1'>
                                    <a class='dropdown-item' href='" . __ROOT__ . "/products/water-treatment/packed-drinking-water-plant'>Packed Drinking Water Plant</a>
                                    <a class='dropdown-item' href='" . __ROOT__ . "/products/water-treatment/filling-machine'>Filling Machine</a>
                                    <a class='dropdown-item' href='" . __ROOT__ . "/products/water-treatment/pet-blow-molding-machine'>Pet Blow Molding Machine</a>
                                    <a class='dropdown-item' href='" . __ROOT__ . "/products/water-treatment/shrink-wrapping-machine'>Shrink Wrapping Machine</a>
                                    <a class='dropdown-item' href='" . __ROOT__ . "/products/water-treatment/laboratory-equipment'>Laboratory Equipment</a>
                                    <a class='dropdown-item' href='" . __ROOT__ . "/products/water-treatment/20-ltr-jar-plant'>20 LTR Jar Plant</a>
                                    <a class='dropdown-item' href='" . __ROOT__ . "/products/water-treatment/iron-removal-plant'>Iron Removal Plant</a>
                                    <a class='dropdown-item' href='" . __ROOT__ . "/products/water-treatment/arsenic-removal-plant'>Arsenic Removal Plant</a>
                                    <a class='dropdown-item' href='" . __ROOT__ . "/products/water-treatment/softener'>Softener</a>
                                    <a class='dropdown-item' href='" . __ROOT__ . "/products/water-treatment/demineralized-water-treatment-plant'>Demineralized Water Treatment Plant</a>
                                    <a class='dropdown-item' href='" . __ROOT__ . "/products/water-treatment/fluoride-removal-plant'>Fluoride Removal Plant</a>

                                    <div class='nav-item dropright item-level-2'>
                                        <a class='dropdown-item dropdown-toggle' role='button' data-toggle='dropdown' href='" . __ROOT__ . "/products/water-treatment/filter-media-chemicals/'>Filter Media &amp; Chemicals</a>
                                        <div class='dropdown-menu menu-level-2'>
                                            <div class='nav-item dropright item-level-3'>
                                                <a class='dropdown-item dropdown-toggle' role='button' data-toggle='dropdown' href='" . __ROOT__ . "/products/water-treatment/filter-media-chemicals/water-treatment-filter-media/'>Water Treatment Filter Media</a>
                                                <div class='dropdown-menu menu-level-3'>
                                                    <a class='dropdown-item' href='" . __ROOT__ . "/products/water-treatment/filter-media-chemicals/water-treatment-filter-media/german-filter-media'>German Filter Media</a>
                                                    <a class='dropdown-item' href='" . __ROOT__ . "/products/water-treatment/filter-media-chemicals/water-treatment-filter-media/water-treatment-chemicals'>Water Treatment Chemicals</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a class='dropdown-item' href='" . __ROOT__ . "/products/water-treatment/industrial-spare-parts'>Industrial Spare Parts</a>
                                </div>
                            </div>

                            <a class='dropdown-item' href='" . __ROOT__ . "/products/water-atm'>Water ATM</a>

                            <div class='nav-item dropright item-level-1'>
                                <a class='dropdown-item dropdown-toggle' role='button' data-toggle='dropdown' href='" . __ROOT__ . "/products/water-purifier/'>Water Purifier</a>
                                <div class='dropdown-menu menu-level-1'>
                                    <a class='dropdown-item' href='" . __ROOT__ . "/products/water-purifier/reverse-osmosis-system'>RO System</a>
                                    <a class='dropdown-item' href='" . __ROOT__ . "/products/water-purifier/ultra-violet-system'>UV System</a>
                                    <a class='dropdown-item' href='" . __ROOT__ . "/products/water-purifier/domestic-spare-parts'>Domestic Spare Parts</a>
                                </div>
                            </div>

                            <a class='dropdown-item no-border' href='" . __ROOT__ . "/products/water-book'>Water Book</a>

                            <div class='dropdown-divider'></div>

                            <a class='dropdown-item no-border' href='" . __ROOT__ . "/products/kitchen-chimney'>Kitchen Chimney</a>
                        </div>
                    </li>
                    <li class='nav-item'>
                    <a class='nav-link' href='" . __ROOT__ . "/catalogue'>Catalogue</a>
                    </li>
                </ul>

                <a class='navbar-brand' href='#'>
                    <img src='" . __ROOT__ . "/assets/images/logo.jpg' alt='Acme Solutions - Gives the Best' />
                </a>

                <ul class='navbar-nav' id='nav-ul-2'>
                    <li class='nav-item'>
                    <a class='nav-link' href='" . __ROOT__ . "/gallery'>Gallery</a>
                    </li>
                    <li class='nav-item'>
                    <a class='nav-link' href='" . __ROOT__ . "/certificates'>Certificates</a>
                    </li>
                    <li class='nav-item'>
                    <a class='nav-link' href='" . __ROOT__ . "/news'>News</a>
                    </li>
                    <li class='nav-item'>
                    <a class='nav-link' href='" . __ROOT__ . "/contact'>Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    ";

    $footer = "
        <footer class='container-fluid'>
            <div class='row b-b-footer pad-btm-3'>
                <div id='footer-block-1' class='col-6 col-sm-3 col-lg-2 text-right b-r-footer'>
                    <ul class='no-mar no-pad no-bullet'>
                        <li><a href='#'>GIAN</a></li>
                        <li><a href='#'>NIRF Data</a></li>
                        <li><a href='#'>Annual Report</a></li>
                        <li><a href='#'>Audit Report</a></li>
                        <li><a href='#'>MoU</a></li>
                        <li><a href='#'>BoG Minutes</a></li>
                        <li><a href='#'>Senate Minutes</a></li>
                    </ul>
                </div>
                <div id='footer-block-2' class='col-6 col-sm-3 col-lg-2 text-left text-sm-right b-r-footer'>
                    <ul class='no-mar no-pad no-bullet'>
                        <li><a href='#'>Download Corner</a></li>
                        <li><a href='#'>Recruitment</a></li>
                        <li><a href='#'>TEQIP - III</a></li>
                        <li><a href='#' target='_blank'>Academic Calender</a></li>
                        <li><a href='#'>Telephone Directory</a></li>
                        <li><a href='#'>RTI Act</a></li>
                        <li><a href='#'>VCR</a></li>
                        <li><a href='#'>SC/ST/OBC Cell</a></li>
                    </ul>
                </div>
                <div id='footer-block-3' class='col-6 col-sm-4 d-block d-sm-none d-lg-block text-right text-sm-center'>
                    <img class='v-middle limit-img' src='" . __ROOT__ . "/assets/images/logo/acme.png' alt=''>
                </div>
                <div id='footer-block-4' class='col-6 col-sm-3 col-lg-2 d-none d-sm-block b-l-footer'>
                    <ul class='no-mar no-pad no-bullet'>
                        <li><a href='#'>Download Corner</a></li>
                        <li><a href='#'>Recruitment</a></li>
                        <li><a href='#'>TEQIP - III</a></li>
                        <li><a href='#' target='_blank'>Academic Calender</a></li>
                        <li><a href='#'>Telephone Directory</a></li>
                        <li><a href='#'>RTI Act</a></li>
                        <li><a href='#'>VCR</a></li>
                        <li><a href='#'>SC/ST/OBC Cell</a></li>
                    </ul>
                </div>
                <div id='footer-block-5' class='col-6 col-sm-3 col-lg-2 text-left b-l-footer'>
                    <ul class='no-mar no-pad no-bullet'>
                        <li>
                            National Institute of Technology Agartala<br />
                            Jirania - 799046<br />
                            Tripura, India<br />
                            <i class='fas fa-phone'></i>&nbsp;+91-381-2546630<br />
                            <i class='far fa-envelope'></i>&nbsp;diptanildas11@gmail.com
                        </li>
                    </ul>
                </div>
            </div>
            <div class='social text-center'>
                <a class='social-icon' href='https://www.facebook.com/' target='_blank'>
                <i class='fab fa-facebook-square'></i></a><a class='social-icon' href='https://twitter.com/' target='_blank'>
                <i class='fab fa-twitter'></i></a><a class='social-icon' href='https://www.instagram.com/' target='_blank'>
                <i class='fab fa-instagram'></i></a><a class='social-icon' href='#' target='_blank'>
                <i class='fab fa-linkedin'></i></a><a class='social-icon' href='https://www.flickr.com/photos/155698633@N04/' target='_blank'>
                <i class='fab fa-pinterest'></i></a>
            </div>
            <div class='website-developer'>
                Website designed by <a href='mailto:daspankajsree@gmail.com'>Pankajsree Das</a>
            </div>
            <div class='copyright d-block d-sm-inline-block'>
                &copy;2018 Acme Solutions - All rights reserved
            </div>
            <div class='disclaimer d-block d-sm-inline-block float-sm-right text-center'>
                <a href='#'>Terms of Sale</a> |
                <a href='#'>Terms &amp; Conditions</a> |
                <a href='#'>Privacy Policy</a>
            </div>
        </footer>
    ";

    $script = "
        <script src='https://code.jquery.com/jquery-3.3.1.min.js' integrity='sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=' crossorigin='anonymous'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js' integrity='sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy' crossorigin='anonymous'></script>
        <script src='" . __ROOT__ . "/assets/js/common.js'></script>
    ";

?>
