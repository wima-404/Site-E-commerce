<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-poissonnerie</title>

    <!-- Google Font -->
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
     <style>
         .product__item__pic__hover li:hover a {
             background-color: blue;
             color: #1c1c1c;
             border : 1px solid #F1F1F1;
         }
         .product__item__pic__hover li:hover i {
             background-position: 0% 0%;
         }
         .product__item__pic__hover li:hover a i {
             color: #ffffff;
             transform: rotate(360deg);
         }
         </style>
    <?php
       require('function.php');

    foreach ($product->getData('Panier') as $item):
        $cart = $product->getProduct($item['id_produit']);
    $subTotal2[] = array_map(function ($item){
        return $item['prix'];
    },$cart);//Fermeture de la fonction array_map//
    endforeach;
    ?>
</head>

<body>
    <!-- Header Section Begin forestgreen-->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> E-poissonnerie@gmail.com</li>
                                <li>Livraison gratuite à partir de 300DH d'achats</li>
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
                                <div>Anglais</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Espagnole</a></li>
                                    <li><a href="#">Arabe</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="seconnecter.html"><i class="fa fa-user"></i>Se Connecter</a>
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
                        <a href="index.php"><img src="img/cover.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <ul>
                                <li><a href="Home.php">Accueil</a></li>
                                <li class="active"><a href="./shop-grid.php">Boutique</a></li>
                                <li><a href="shoping-cart.php">Panier</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i>
                            <li><a href="shoping-cart.php"><i class="fa fa-shopping-bag"><span style="background-color: blue"><?php echo count($product->getData('Panier')); ?></span></i>
                        </ul>
                        <div class="header__cart__price">Addition: <span><?php echo isset($subTotal2) ? $Cart->getSum($subTotal2) : 0;  ?>DH</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Menu</span>
                        </div>
                        <ul>
                            <li><a href="#">POISSON FRAIS</a></li>
                            <li><a href="#">HOMARD</a></li>
                            <li><a href="#">FRUITS DE MER</a></li>
                            <li><a href="#">EPICERIE DE LA MER</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form class="mehdi" action="#">
                                <div class="hero__search__categories">
                                    Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="Qu'est-ce que vous cherchez?">
                                <button type="submit" class="site-btn">Rechercher</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>0500000000</h5>
                                <span>support 24/7 </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>-->

    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>E-poissonerie</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <!--TRAITEMENT PHP-->
    <?php
    $product_shuffle = $product->getData();
    ob_start();
    // Appelation de la methode POST//
    if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['produit_boutique'])) {
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
    }
    ?>
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <div class="hero__categories">
                                <div class="hero__categories__all">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </div>
                                <ul>
                                    <li><a href="">POISSON FRAIS</a></li>
                                    <li><a href="#">HOMARD</a></li>
                                    <li><a href="#">FRUITS DE MER</a></li>
                                    <li><a href="#">EPICERIE DE LA MER</a></li>
                                    <li><a href="#">POISSON NETTOYES</a></li>
                                    <li><a href="#">PRETS A CUIRE</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Promotions</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/calamar.jpg">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <form method="post">
                                                    <input type="hidden" name="item_id" value="<?php echo $item['id_produit'] ?? '0'; ?>">
                                                    <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                                    <button type="submit" name="produit_boutique" class="btn btn-primary font-size-12">Ajouter au panier</button>

                                                </form>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <h5><a href="#">Calamar</a></h5>
                                            <div class="product__item__price"> 124.00dh<span>155.00dh</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/couteaux.jpg">
                                            <div class="product__discount__percent">-10%</div>
                                            <ul class="product__item__pic__hover">
                                                <form method="post">
                                                    <input type="hidden" name="item_id" value="<?php echo $item['id_produit'] ?? '0'; ?>">
                                                    <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                                    <button type="submit" name="produit_boutique" class="btn btn-primary font-size-12">Ajouter au panier</button>

                                                </form>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">

                                            <h5><a href="#">Couteaux</a></h5>
                                            <div class="product__item__price">57.60dh <span>64.00dh</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/huitres.jpeg">
                                            <div class="product__discount__percent">-10%</div>
                                            <ul class="product__item__pic__hover">
                                                <form method="post">
                                                    <input type="hidden" name="item_id" value="<?php echo $item['id_produit'] ?? '0'; ?>">
                                                    <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                                    <button type="submit" name="produit_boutique" class="btn btn-primary font-size-12">Ajouter au panier</button>

                                                </form>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">

                                            <h5><a href="#">Huitres Calibre n°02 à la Pièce (Ouvertes)</a></h5>
                                            <div class="product__item__price">14.40dh<span>16.00 dh</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/langouste.jpg">
                                            <div class="product__discount__percent">-10%</div>
                                            <ul class="product__item__pic__hover">
                                                <form method="post">
                                                    <input type="hidden" name="item_id" value="<?php echo $item['id_produit'] ?? '0'; ?>">
                                                    <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                                    <button type="submit" name="produit_boutique" class="btn btn-primary font-size-12">Ajouter au panier</button>

                                                </form>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">

                                            <h5><a href="#">Langouste</a></h5>
                                            <div class="product__item__price">409.50dh <span>455.00dh</span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/sardin.jpg">
                                            <div class="product__discount__percent">-15%</div>
                                            <ul class="product__item__pic__hover">
                                                <form method="post">
                                                    <input type="hidden" name="item_id" value="<?php echo $item['id_produit'] ?? '0'; ?>">
                                                    <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                                    <button type="submit" name="produit_boutique" class="btn btn-primary font-size-12">Ajouter au panier</button>

                                                </form>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">

                                            <h5><a href="#">Sardin</a></h5>
                                            <div class="product__item__price">17.00dh <span>20.00dh</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach ($product_shuffle as $item) { ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="<?php echo $item['image_produit'] ?? "./img/product/1.jpg"; ?>">
                                    <ul class="product__item__pic__hover">
                                        <form method="post">
                                            <input type="hidden" name="item_id" value="<?php echo $item['id_produit'] ?? '0'; ?>">
                                            <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                            <button type="submit" name="produit_boutique" class="btn btn-primary font-size-12">Ajouter au panier</button>

                                        </form>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><?php echo $item['Nom_produit'] ?? "inconnue"; ?></h6>
                                    <h5><?php echo $item['prix'] ?? '0'; ?>DH</h5>
                                </div>
                            </div>
                        </div>
                        <?php } ?> <!--FERMETURE DE LA BOUCLE-->

                    </div>
                    <!--   <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>-->
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
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
                            <li>Addresse: </li>
                            <li>Telephone: 0500000000</li>
                            <li>Email: E-poissonerie@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Liens utiles</h6>
                        <ul>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="shop-grid.php">Notre Boutique</a></li>
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
                            <input type="text" placeholder="Entrer votre email">
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