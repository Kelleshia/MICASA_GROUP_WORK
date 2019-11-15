<?php
    
    //Using Files, store the information entered on the following, respectively:
    //contact.txt, location.txt, description.txt 
    if(session_status() == PHP_SESSION_NONE){
        session_start();
        if(!$_SESSION['active']){
            header('Location: registration.php');
        } 
    }
    $contact = fopen("contact.txt", "w") or die("Unable to open file!");
    fwrite($contact, $_SESSION['username']."\n");
    fwrite($contact, $_SESSION['fullname']."\n");
    fwrite($contact, $_SESSION['email']."\n");
    fwrite($contact, $_SESSION['tel']."\n");
    fwrite($contact, $_SESSION['password']."\n");
    fwrite($contact, $_SESSION['password2']."\n");
    fclose($contact);
?>
<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Mi Casa &mdash;</title>    
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
                <link rel="stylesheet" href="css/style.css">
            </head>
            <body>
            <div class="site-loader"></div>
               <div class="site-wrap">
                  <div class="site-navbar mt-4">
                    <div class="container py-1">
                      <div class="row align-items-center">
                          <div class="col-8 col-md-8 col-lg-4">
                             <h1 class="mb-0"><a href="index.php" class="text-white h2 mb-0"><strong>Mi Casa<span class="text-danger">.</span></strong></a></h1>
                          </div>
                              <div class="col-4 col-md-4 col-lg-8">
                               <nav class="site-navigation text-right text-md-right" role="navigation">

                                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
                                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                                         <li><input type="button3" class="button" value="Logout" onclick="window.location.href='logout.php'" /></li>
                                         </ul>
                                 </nav>
                                    </div>
           

                             </div>
                           </div>
                        </div>
                    </div>

                      <div class="slide-one-item home-slider owl-carousel">

                     <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
                        <div class="container">
                          <div class="row align-items-center justify-content-center text-center">
                            <div class="col-md-10">
                              <span class="d-inline-block bg-success text-white px-3 mb-3 property-offer-type rounded">For Rent</span>
                               <h1 class="mb-2">Information Successfully Saved</h1>
                               <input type="button4" class="button" value="Add More" onclick="window.location.href='location.php'" />
                               
              
                            </div>
                           </div>
                        </div>
                    </div>

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
<               <script src="js/aos.js"></script>

                <script src="js/main.js"></script>
    </body>
</html>;
