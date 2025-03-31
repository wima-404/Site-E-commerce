<?php
include('fp.php');
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-poissonerie</title>

    <!-- Google Font -->
    <link rel="icon" href="img/cover1.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> E-poissonnerie@gmail.com</li>
                                <li><?php echo $lang['liv'];?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>

                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <a href="contact.php?lang=fr"><?php echo $lang['fran'];?></a>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="contact.php?lang=en"><?php echo $lang['ang'];?></a></li>
                                    <li><a href="contact.php?lang=ar"><?php echo $lang['arb'];?></a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="seconnecter.html"><i class="fa fa-user"></i><?php echo $lang['conn'];?></a>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="sinscrire.html"><i class="fa fa-user"></i><?php echo $lang['ins'];?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="Home.php"><img src="img/cover.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.php"><?php echo $lang['one'];?></a></li>
                            <li><a href="./shop-grid.php"><?php echo $lang['two'];?></a></li>
                            <li><a href="#"><?php echo $lang['pages'];?></a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html"><?php echo $lang['details'];?></a></li>
                                    <li><a href="shoping-cart.php"><?php echo $lang['panier'];?></a></li>
                                    <li><a href="./checkout.html"><?php echo $lang['checkout'];?></a></li>
                                    <li><a href="./blog-details.html"><?php echo $lang['blogdet'];?></a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html"><?php echo $lang['blog'];?></a></li>
                            <li><a href="./contact.php"><?php echo $lang['contact'];?></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i>
                        </ul>
                        <div class="header__cart__price"><?php echo $lang['addition'];?><br/><span>0.00<?php echo $lang['dh'];?></span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg"
        data-setbg="https://cdn.futura-sciences.com/buildsv6/images/wide1920/7/f/e/7feb33f212_50153147_poissons-fotolia.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2><?php echo $lang['contacter'];?></h2>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4><?php echo $lang['tel'];?></h4>
                        <p>0500000000</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4><?php echo $lang['add'];?></h4>
                        <p>Lotissement Janah Bloc 01 N08</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4><?php echo $lang['hor'];?></h4>
                        <p>9:00h a 17:00h</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4><?php echo $lang['email'];?></h4>
                        <p>E-poissonerie@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Begin -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3371.199274648735!2d-6.368060385215499!3d32.33335946378177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda387aa25be53f1%3A0xdeb87dd29cd4d414!2sQuartier%20Al%20Adarissa%2C%20B%C3%A9ni%20Mellal!5e0!3m2!1sfr!2sma!4v1622820398904!5m2!1sfr!2sma"
            width="600" height="500" style="border:0;" height="500" style="border:0;" allowfullscreen=""
            aria-hidden="false" tabindex="0"></iframe>
        <div class="map-inside">
            <i class="icon_pin"></i>
            <div class="inside-widget">
                <h4>Beni Mellal</h4>
                <ul>
                    <li>Telephone: +212-600-00-00-00</li>
                    <li>Addresse: Lotissement janahe Bloc 01 N08</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Map End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2><?php echo $lang['msg'];?></h2>
                    </div>
                </div>
            </div>
            <form action="#">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="Votre nom">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="Votre Email">
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea placeholder="Votre message"></textarea>
                        <button type="submit" class="site-btn"><?php echo $lang['env'];?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="Home.php"><img src="img/cover.png" alt=""></a>
                        </div>
                        <ul>
                            <li><b>Addresse:</b>Lotissement janahe Bloc 01 N08</li>
                            <li><b>Telephone:</b> 0500000000</li>
                            <li><b>Email:</b> E-poissonerie@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Liens utiles</h6>
                        <ul>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="shop-grid.html">Notre Boutique</a></li>
                            <li><a href="#">Securite de paiement</a></li>

                        </ul>
                        <ul>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Rejoinger notre blog</h6>
                        <form action="#">
                            <input type="text" placeholder="Entrer votre Email">
                            <button type="submit" class="site-btn">S'inscrire</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>