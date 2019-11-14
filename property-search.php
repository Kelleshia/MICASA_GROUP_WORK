<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mi Casa &mdash;</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">


    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom-styles.css">

</head>

<body>


    <div class="site-loader"></div>
    <div class="site-wrap"></div>

    <div class="site-navbar mt-4">
        <div class="container py-1">
            <div class="row align-items-center">
                <div class="col-2  col-md-4 col-lg-2 col-sm-8">
                    <h1 class="mb-0"><a href="index.php" class="text-white h2 mb-0"><strong>Mi Casa<span class="text-danger">.</span></strong></a></h1>
                </div>
                <div class="col-10  col-md-8 col-lg-10 col-sm-4">
                    <nav class="site-navigation text-right text-md-right" role="navigation">

                        <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                            <li class="nav-item">
                                <a class="nav-link text-white text-warning" href="property-search.php">Property Search</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">View My Properties</a>
                            </li>
                            <input class="btn btn-primary rouund" type="button" value="Login" onclick="window.location.href='login.php'">
                            <input class="btn btn-light rouund" type="button" value="Register" onclick="window.location.href='registration.php'">
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="slide-one-item home-slider owl-carousel">

        <div class="site-blocks-cover overlay" style="background-image: url(images/bg_def4.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-10">
                        <!-- <span class="d-inline-block bg-success text-white px-3 mb-3 property-offer-type rounded">For Rent</span>
                        <h1 class="mb-2">65 Garden Blvd</h1>
                        <p class="mb-5"><strong class="h2 text-success font-weight-bold">$132,250,500</strong></p> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="site-blocks-cover overlay" style="background-image: url(images/bg_def3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-10">
                        <!-- <span class="d-inline-block bg-danger text-white px-3 mb-3 property-offer-type rounded">For Sale</span>
                        <h1 class="mb-2">Beverley Hills, JM</h1>
                        <p class="mb-5"><strong class="h2 text-success font-weight-bold">$180,000,500</strong></p> -->
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row justify-content-center" style="background-color:#F0E7D8;">
        <form class="form-search col-md-12" method="POST" action="./validations/propertvalid.php" style="margin-top: -100px;">
            <div class="row  align-items-end">
                <div class="col-md-2">
                    <label>Parish</label>
                    <select class="selectpicker" data-style="btn-light" data-width="100%" name="parish" title="<?php if ($_SESSION['parish'] == null) {
                                                                                                                    echo 'Select';
                                                                                                                } else {
                                                                                                                    echo $_SESSION['parish'];
                                                                                                                } ?>">
                        <option <?php if ($_SESSION['parish'] == 'Kingston & St. Andrew') {
                                    echo 'selected="selected"';
                                } ?>>Kingston & St. Andrew</option>
                        <option <?php if ($_SESSION['parish'] == 'Portland') {
                                    echo 'selected="selected"';
                                } ?>>Portland</option>
                        <option <?php if ($_SESSION['parish'] == 'St. Thomas') {
                                    echo 'selected="selected"';
                                } ?>>St. Thomas</option>
                        <option <?php if ($_SESSION['parish'] == 'St. Catherine') {
                                    echo 'selected="selected"';
                                } ?>>St. Catherine</option>
                        <option <?php if ($_SESSION['parish'] == 'St. Mary') {
                                    echo 'selected="selected"';
                                } ?>>St. Mary</option>
                        <option <?php if ($_SESSION['parish'] == 'St. Ann') {
                                    echo 'selected="selected"';
                                } ?>>St. Ann</option>
                        <option <?php if ($_SESSION['parish'] == 'Manchester') {
                                    echo 'selected="selected"';
                                } ?>>Manchester</option>
                        <option <?php if ($_SESSION['parish'] == 'Clarendon') {
                                    echo 'selected="selected"';
                                } ?>>Clarendon</option>
                        <option <?php if ($_SESSION['parish'] == 'Hanover') {
                                    echo 'selected="selected"';
                                } ?>>Hanover</option>
                        <option <?php if ($_SESSION['parish'] == 'Westmoreland') {
                                    echo 'selected="selected"';
                                } ?>>Westmoreland</option>
                        <option <?php if ($_SESSION['parish'] == 'St. James') {
                                    echo 'selected="selected"';
                                } ?>>St. James</option>
                        <option <?php if ($_SESSION['parish'] == 'Trelawny') {
                                    echo 'selected="selected"';
                                } ?>>Trelawny</option>
                        <option <?php if ($_SESSION['parish'] == 'St. Elizabeth') {
                                    echo 'selected="selected"';
                                } ?>>St. Elizabeth</option>
                    </select>



                </div>
                <div class="col-md-2">
                    <label for="properties">Property Type</label>
                    <select class="selectpicker" data-style="btn-light" data-width="100%" name="property_type" title="<?php if ($_SESSION['property_type'] == null) {
                                                                                                                            echo 'Select';
                                                                                                                        } else {
                                                                                                                            echo $_SESSION['property_type'];
                                                                                                                        } ?>">
                        <option <?php if ($_SESSION['property_type'] == 'Vacant Lot') {
                                    echo 'selected="selected"';
                                } ?>>Vacant Lot</option>
                        <option <?php if ($_SESSION['property_type'] == 'Residential') {
                                    echo 'selected="selected"';
                                } ?>>Residential</option>
                        <option <?php if ($_SESSION['property_type'] == 'Commercial') {
                                    echo 'selected="selected"';
                                } ?>>Commercial</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="listing">Listing Type</label>
                    <select class="selectpicker" data-style="btn-light" data-width="100%" name="listing_type" title="<?php if ($_SESSION['listing_type'] == null) {
                                                                                                                            echo 'Select';
                                                                                                                        } else {
                                                                                                                            echo $_SESSION['listing_type'];
                                                                                                                        } ?>">
                        <option <?php if ($_SESSION['listing_type'] == 'Rent') {
                                    echo 'selected="selected"';
                                } ?>>Rent</option>
                        <option <?php if ($_SESSION['listing_type'] == 'Purchase') {
                                    echo 'selected="selected"';
                                } ?>>Purchase</option>
                        <option <?php if ($_SESSION['listing_type'] == 'Lease') {
                                    echo 'selected="selected"';
                                } ?>>Lease</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="price">Min Price</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                        </div>
                        <input type="text" name="price" class="form-control <?php if (isset($price_error)) {
                                                                                echo "is-invalid";
                                                                            } ?>" type="text" value="<?php echo $_SESSION['price'] ?>">
                    </div>

                </div>
                <div class="col-md-2">
                    <label for="price">Max Price</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                        </div>
                        <input type="text" name="price" class="form-control <?php if (isset($price_error)) {
                                                                                echo "is-invalid";
                                                                            } ?>" type="text" value="<?php echo $_SESSION['price'] ?>">
                    </div>

                </div>
                <div class="col-md-2">
                    <input class="btn btn-success text-white btn-block rounded-2" role="button" href="./registerproperty.php" name="finish" type="submit" value="Search">
                </div>

            </div>
        </form>
    </div>


    <div class="site-section site-section-sm p-1 pt-5" style="background-color:#F0E7D8;">
        <div class="container">
            <div class="row mb-5">
                <!-- Properties -->
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="property-entry h-100">
                        <a href="property-details.html" class="property-thumbnail">
                            <div class="offer-type-wrap">
                                <span class="offer-type bg-danger">Sale</span>
                                <span class="offer-type bg-success">Rent</span>
                            </div>
                            <img src="images/img_9.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="p-4 property-body">
                            <h2 class="property-title">Mona Heights</h2>
                            <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 650 Garden Boulevard, Kingston 6, Jamaica</span>
                            <strong class="property-price text-primary mb-3 d-block text-dark">$132,265,500</strong>
                            <ul class="property-specs-wrap mb-3 mb-lg-0">
                                <li>
                                    <span class="property-specs">Beds</span>
                                    <span class="property-specs-number">3 <sup>+</sup></span>

                                </li>
                                <li>
                                    <span class="property-specs">Baths</span>
                                    <span class="property-specs-number">2</span>

                                </li>
                                <li>
                                    <span class="property-specs">Acres</span>
                                    <span class="property-specs-number">9</span>

                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="property-entry h-100">
                        <a href="property-details.html" class="property-thumbnail">
                            <div class="offer-type-wrap">
                                <span class="offer-type bg-danger">Sale</span>
                                <span class="offer-type bg-success">Rent</span>
                            </div>
                            <img src="images/img_11.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="p-4 property-body">
                            <h2 class="property-title">Runaway Bay</a></h2>
                            <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span>87 Gold Road, Runaway Bay, St Ann, JM</span>
                            <strong class="property-price text-primary mb-3 d-block text-dark">$200,265,500</strong>
                            <ul class="property-specs-wrap mb-3 mb-lg-0">
                                <li>
                                    <span class="property-specs">Beds</span>
                                    <span class="property-specs-number">4 <sup>+</sup></span>

                                </li>
                                <li>
                                    <span class="property-specs">Baths</span>
                                    <span class="property-specs-number">2</span>

                                </li>
                                <li>
                                    <span class="property-specs">Acres</span>
                                    <span class="property-specs-number">16</span>

                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="property-entry h-100">
                        <a href="property-details.html" class="property-thumbnail">
                            <div class="offer-type-wrap">
                                <span class="offer-type bg-info">Lease</span>
                            </div>
                            <img src="images/img_12.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="p-4 property-body">
                            <h2 class="property-title">Beverley Hills</a></h2>
                            <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span>86 Kingman Avenue, Beverley Hills, St Andrew, JM</span>
                            <strong class="property-price text-primary mb-3 d-block text-dark">$150,265,500</strong>
                            <ul class="property-specs-wrap mb-3 mb-lg-0">
                                <li>
                                    <span class="property-specs">Beds</span>
                                    <span class="property-specs-number">3 <sup>+</sup></span>

                                </li>
                                <li>
                                    <span class="property-specs">Baths</span>
                                    <span class="property-specs-number">2</span>

                                </li>
                                <li>
                                    <span class="property-specs">Acres</span>
                                    <span class="property-specs-number">6</span>

                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="property-entry h-100">
                        <a href="property-details.html" class="property-thumbnail">
                            <div class="offer-type-wrap">
                                <span class="offer-type bg-danger">Sale</span>
                                <span class="offer-type bg-success">Rent</span>
                            </div>
                            <img src="images/img_4.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="p-4 property-body">
                            <h2 class="property-title">Pennycooke Heights</a></h2>
                            <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 25 Pennywise Road, Montego Bay, St James, JM</span>
                            <strong class="property-price text-primary mb-3 d-block text-dark">$210,265,500</strong>
                            <ul class="property-specs-wrap mb-3 mb-lg-0">
                                <li>
                                    <span class="property-specs">Beds</span>
                                    <span class="property-specs-number">6 <sup>+</sup></span>

                                </li>
                                <li>
                                    <span class="property-specs">Baths</span>
                                    <span class="property-specs-number">4</span>

                                </li>
                                <li>
                                    <span class="property-specs">Acres</span>
                                    <span class="property-specs-number">16</span>

                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="property-entry h-100">
                        <a href="property-details.html" class="property-thumbnail">
                            <div class="offer-type-wrap">
                                <span class="offer-type bg-danger">Sale</span>
                                <span class="offer-type bg-success">Rent</span>
                            </div>
                            <img src="images/img_5.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="p-4 property-body">
                            <h2 class="property-title"><a href="property-details.html">Doctors Cave</a></h2>
                            <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 12 Hot Head Avenue, Montego Bay, St James, JM</span>
                            <strong class="property-price text-primary mb-3 d-block text-dark">$120,265,500</strong>
                            <ul class="property-specs-wrap mb-3 mb-lg-0">
                                <li>
                                    <span class="property-specs">Beds</span>
                                    <span class="property-specs-number">2 <sup>+</sup></span>

                                </li>
                                <li>
                                    <span class="property-specs">Baths</span>
                                    <span class="property-specs-number">1</span>

                                </li>
                                <li>
                                    <span class="property-specs">Acres</span>
                                    <span class="property-specs-number">1.6</span>

                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="property-entry h-100">
                        <a href="property-details.html" class="property-thumbnail">
                            <div class="offer-type-wrap">
                                <span class="offer-type bg-info">Lease</span>
                            </div>
                            <img src="images/img_6.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="p-4 property-body">
                            <h2 class="property-title">Falmouth</a></h2>
                            <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 853 Maple Road, Falmouth, Trewlawny, JM</span>
                            <strong class="property-price text-primary mb-3 d-block text-dark">$132,265,500</strong>
                            <ul class="property-specs-wrap mb-3 mb-lg-0">
                                <li>
                                    <span class="property-specs">Beds</span>
                                    <span class="property-specs-number">3 <sup>+</sup></span>

                                </li>
                                <li>
                                    <span class="property-specs">Baths</span>
                                    <span class="property-specs-number">2</span>

                                </li>
                                <li>
                                    <span class="property-specs">Acres</span>
                                    <span class="property-specs-number">3</span>

                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="property-entry h-100">
                        <a href="property-details.html" class="property-thumbnail">
                            <div class="offer-type-wrap">
                                <span class="offer-type bg-danger">Sale</span>
                                <span class="offer-type bg-success">Rent</span>
                            </div>
                            <img src="images/img_10.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="p-4 property-body">
                            <h2 class="property-title">Treasure Beach</a></h2>
                            <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span>Treasure Beach, St elizabeth, JM</span>
                            <strong class="property-price text-primary mb-3 d-block text-dark">$168,265,500</strong>
                            <ul class="property-specs-wrap mb-3 mb-lg-0">
                                <li>
                                    <span class="property-specs">Beds</span>
                                    <span class="property-specs-number">5 <sup>+</sup></span>

                                </li>
                                <li>
                                    <span class="property-specs">Baths</span>
                                    <span class="property-specs-number">4</span>

                                </li>
                                <li>
                                    <span class="property-specs">Acres</span>
                                    <span class="property-specs-number">10</span>

                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="property-entry h-100">
                        <a href="property-details.html" class="property-thumbnail">
                            <div class="offer-type-wrap">
                                <span class="offer-type bg-danger">Sale</span>
                                <span class="offer-type bg-success">Rent</span>
                            </div>
                            <img src="images/img_8.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="p-4 property-body">
                            <h2 class="property-title">Old Habour Bay</a></h2>
                            <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 210 Old Habour Bay, St Catherine, JM</span>
                            <strong class="property-price text-primary mb-3 d-block text-dark">$142,265,500</strong>
                            <ul class="property-specs-wrap mb-3 mb-lg-0">
                                <li>
                                    <span class="property-specs">Beds</span>
                                    <span class="property-specs-number">3 <sup>+</sup></span>

                                </li>
                                <li>
                                    <span class="property-specs">Baths</span>
                                    <span class="property-specs-number">1</span>

                                </li>
                                <li>
                                    <span class="property-specs">SQ FT</span>
                                    <span class="property-specs-number">3.5</span>

                                </li>
                            </ul>

                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="property-entry h-100">
                        <a href="property-details.html" class="property-thumbnail">
                            <div class="offer-type-wrap">
                                <span class="offer-type bg-info">Lease</span>
                            </div>
                            <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="p-4 property-body">
                            <h2 class="property-title">Mona Height</a></h2>
                            <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span>Orchid Path, Kingston 6, JM</span>
                            <strong class="property-price text-primary mb-3 d-block text-dark">$113,265,500</strong>
                            <ul class="property-specs-wrap mb-3 mb-lg-0">
                                <li>
                                    <span class="property-specs">Beds</span>
                                    <span class="property-specs-number">2<sup>+</sup></span>

                                </li>
                                <li>
                                    <span class="property-specs">Baths</span>
                                    <span class="property-specs-number">1</span>

                                </li>
                                <li>
                                    <span class="property-specs">Acres</span>
                                    <span class="property-specs-number">4</span>

                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div>
                        <h3 class="footer-heading mb-4">About Mi Casa</h3>
                        <p>Fast growing Real Estate Company at 237 Old Hope Road, Kingston 6, Jamaica. We offer the best solutions to all your real estate problems! We specialize in locating suitable properties and offering expert advice to our clients.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-md-12" hidden>
                            <h3 class="footer-heading mb-4">Contact</h3>
                            <p class="mb-0 font-weight-bold">Address</p>
                            <p class="mb-4">237 Old Hoope Rd, Kingston 6, JM</p>
                            <p class="mb-0 font-weight-bold">Email</p>
                            <p class="mb-0"><a href="#">Scammadem_dehyaah@gmail.com</a></p>
                        </div>
                    </div>


                </div>

                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h3 class="footer-heading mb-4">Follow Us</h3>

                    <div>
                        <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                    </div>



                </div>

            </div>
            <div class="row mt-5 text-center">
                <div class="col-md-12">
                    <p>

                        Copyright
                        &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                        <script>
                            document.write(new Date().getFullYear());
                        </script> Kelleshia Kinlocke & Denzil Williams

                    </p>
                </div>

            </div>
        </div>
    </footer>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mediaelement-and-player.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

</body>

</html>