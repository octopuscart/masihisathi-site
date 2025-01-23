<!doctype html>
<html lang="en">

<head>
    <title>MasihiSathi</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#f6af04">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <!--== FAV ICON(BROWSER TAB ICON) ==-->

    <link rel="shortcut icon" href="images/MS images/homelogo.png" type="image/x-icon">
    <!--== CSS FILES ==-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
          <![endif]-->
</head>
<?php

$menuItems = [
    'Home' => 'index.php',
    'Pricing plans' => 'plans.php',
    'Contact' => 'contact.php',
    'About' => 'about.php',
    'FAQ' => 'faq.php',
];
?>
<?php

$footermenuItems = $menuItems + [

    'Privacy Policy' => 'privacy-policy.php',
    'Terms & Conditions' => 'terms-conditions.php',
];
?>

<body>
    <!-- PRELOADER -->
    <div id="preloader">
        <div class="plod">
            <span class="lod1"><img src="images/loder/1.png" alt="" loading="lazy"></span>
            <span class="lod2"><img src="images/loder/2.png" alt="" loading="lazy"></span>
            <span class="lod3"><img src="images/loder/3.png" alt="" loading="lazy"></span>
        </div>
    </div>
    <div class="pop-bg"></div>
    <!-- END PRELOADER -->


    <!-- TOP MENU -->
    <div class="head-top">
        <div class="container">
            <div class="row">
                <div class="lhs">
                    <ul>
                        <?php
                        foreach ($menuItems as $title => $url) {
                            echo "<li><a href=\"$url\">$title</a></li>";
                        }
                        ?>
                    </ul>
                </div>
                <div class="rhs">
                    <ul>
                        <li><a href="tel:+91 9960877313"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;+91
                                9960877313 </a></li>
                        <li><a href="mailto:support@masihisathi.com"><i class="fa fa-envelope-o"
                                    aria-hidden="true"></i>&nbsp; support@masihisathi.com</a></li>
                        <li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#https://wa.link/2q4ca7"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END -->

    <!-- MENU POPUP -->
    <div class="menu-pop menu-pop1">
        <span class="menu-pop-clo"><i class="fa fa-times" aria-hidden="true"></i></span>
        <div class="inn">
            <img src="images/MS images/homelogo.png" alt="" loading="lazy" class="logo-brand-only">
            <p><strong>MasihiSathi</strong> is a unique matrimonial platform designed exclusively for
                Christians, rooted in biblical principles of love, trust, and integrity. Our mission is to help
                believers find their
                God-ordained life partners without the interference of middlemen or hidden charges. </p>
            <ul class="menu-pop-info">
                <li><a href="#!"><i class="fa fa-phone" aria-hidden="true"></i>+919960877313</a></li>
                <li><a href="https://wa.link/2q4ca7"><i class="fa fa-whatsapp"
                            aria-hidden="true"></i>+919960877313</a></li-->
                <li><a href="#!"><i class="fa fa-envelope-o" aria-hidden="true"></i>evansfrancis333@gmail.com</a></li>
                <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i>Nagpur, Maharashtra, India</a></li>
            </ul>
            <div class="menu-pop-help">
                <h4>Support Team</h4>
                <div class="user-pro">
                    <img src="images/MS images/logoMS.png" alt="" loading="lazy">
                </div>
                <div class="user-bio">
                    <h5>Team Member</h5>
                    <span>Your personal advisor</span>
                    <a href="contact.php" class="btn btn-primary btn-sm">Ask your doubts</a>
                </div>
            </div>
            <div class="menu-pop-soci">
                <ul>
                    <li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="https://wa.link/2q4ca7"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                    <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#!"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li><a href="#!"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END -->

    <!-- CONTACT EXPERT -->
    <div class="menu-pop menu-pop2">
        <span class="menu-pop-clo"><i class="fa fa-times" aria-hidden="true"></i></span>
        <div class="inn">
            <div class="menu-pop-help">
                <h4>Support Team</h4>
                <div class="user-pro">
                    <img src="images/MS images/logoMS.png" alt="" loading="lazy">
                </div>
                <div class="user-bio">
                    <h5>Team Member</h5>
                    <span>Your personal advisor</span>
                    <a href="contact.php" class="btn btn-primary btn-sm">Ask your doubts</a>
                </div>
            </div>
            <div class="menu-pop-soci">
                <ul>
                    <li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#!"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                    <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#!"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li><a href="https://wa.link/2q4ca7"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>


        </div>
    </div>
    <!-- END -->

    <!-- MAIN MENU -->
    <div class="hom-top">
        <div class="container">
            <div class="row">
                <div class="hom-nav">
                    <!-- LOGO -->
                    <div class="logo">
                        <span class="menu desk-menu">
                            <i></i><i></i><i></i>
                        </span>
                        <a href="index.php" class="logo-brand"><img src="images/MS images/MasihiSathiComlogowebsite.png"
                                alt="" loading="lazy" class="ic-logo"></a>
                    </div>

                    <!-- EXPLORE MENU-->
                    <div class="bl" style="width: 100%;">
                        <ul>
                            <?php
                            foreach ($footermenuItems as $title => $url) {
                                echo "<li><a href=\"$url\">$title</a></li>";
                            }
                            ?>
                        </ul>
                    </div>
                    <!-- USER PROFILE 
                    
    
                        <!--MOBILE MENU-->
                    <div class="mob-menu">
                        <div class="mob-me-ic">
                            <span class="ser-open mobile-ser">
                                <img src="images/icon/search.svg" alt="">
                            </span>
                            <!--span class="mobile-exprt" data-mob="dashbord">
                                    <img src="images/icon/users.svg" alt="">
                                </span-->
                            <span class="mobile-menu" data-mob="mobile">
                                <img src="images/icon/menu.svg" alt="">
                            </span>
                        </div>
                    </div>
                    <!--END MOBILE MENU-->
                </div>
            </div>
        </div>
    </div>
    <!-- END -->

    <!-- EXPLORE MENU POPUP -->
    <div class="mob-me-all mobile_menu">
        <div class="mob-me-clo"><img src="images/icon/close.svg" alt=""></div>
        <div class="mv-bus">
            <h4><i class="fa fa-globe" aria-hidden="true"></i> EXPLORE CATEGORY</h4>
            <ul>
                <li><a href="plans.php">Join Now</a></li>
            </ul>
            <h4><i class="fa fa-align-center" aria-hidden="true"></i> All Pages</h4>
            <ul>
                <?php
                foreach ($menuItems as $title => $url) {
                    echo "<li><a href=\"$url\">$title</a></li>";
                }
                ?>
            </ul>
            <div class="menu-pop-help">
                <h4>Support Team</h4>
                <div class="user-pro">
                    <img src="images/MS images/logoMS.png" alt="" loading="lazy">
                </div>
                <div class="user-bio">
                    <h5>Team Member</h5>
                    <span>Your personal advisor</span>
                    <a href="contact.php" class="btn btn-primary btn-sm">Ask your doubts</a>
                </div>
            </div>
            <div class="menu-pop-soci">
                <ul>
                    <li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="https://wa.link/2q4ca7"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                    <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#!"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li><a href="#!"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>

        </div>
    </div>
    </div>
    <!-- END MOBILE MENU POPUP -->

    <!-- MOBILE USER PROFILE MENU POPUP 
    <div class="mob-me-all dashbord_menu">
        <div class="mob-me-clo"><img src="images/icon/close.svg" alt=""></div>
        <div class="mv-bus">
            <div class="head-pro">
                <img src="images/profiles/1.jpg" alt="" loading="lazy">
                <b>user profile</b><br>
                <h4>Ashley emyy</h4>
            </div>
            <ul>
                <li><a href="login.html">Login</a></li>
                <li><a href="sign-up.html">Sign-up</a></li>
                <li><a href="plans.php">Pricing plans</a></li>
                <li><a href="all-profiles.html">Browse profiles</a></li>
            </ul>
        </div>
    </div-->
    <!-- END USER PROFILE MENU POPUP -->