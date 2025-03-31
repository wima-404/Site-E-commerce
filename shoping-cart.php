<!DOCTYPE html>
<html lang="fr">

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
    <link rel="stylesheet" href="css/css1.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <?php
           require('function.php');
    ?>
</head>
<body>
<?php
foreach ($product->getData('Panier') as $item):
$cart = $product->getProduct($item['id_produit']);
$subTotal1[] = array_map(function ($item){
?>
    <?php
    return $item['prix'];
},$cart);//Fermeture de la fonction array_map//
endforeach;
?>
    <!-- Header Section Begin -->
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
                        <a href="Home.php"><img src="img/cover.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="Home.php">Accueil</a></li>
                            <li><a href="Boutique.php">Boutique</a></li>
                            <li class="active"><a href="shoping-cart.php">Panier</a></li>
                            <li><a href="frais.php">Blog</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i>
                            <li><a href="#"><i class="fa fa-shopping-bag"><span style="background-color: blue"><?php echo count($product->getData('Panier')); ?></span></i>
                        </ul>
                        <div class="header__cart__price">Addition: <span><?php echo isset($subTotal1) ? $Cart->getSum($subTotal1) : 0;  ?>DH</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->

    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="https://images.unsplash.com/photo-1487335414417-ac48b43a8cc7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1350&q=80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Votre Panier</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <!-- Shoping Cart Section Begin -->
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['delete-cart-submit'])) {
            $deletedrecord = $Cart->deleteCart($_POST['item_id']);
            echo "<script>alert('Produit Supprime Avec Succes...!')</script>";
            echo "<script>window.location='shoping-cart.php'</script>";
        }
    }
    ?>
    <section class="shoping-cart spad">
        <div class="col-lg-12">
            <div class="shoping__cart__table">
        <table>
        <thead>
        <tr>
            <th class="shoping__product" style="padding-left: 5%">Produits</th>
            <th style="padding-left: 25%">Prix</th>
            <th style="padding-left: 20%">Quantité</th>
            <th style="padding-right: 7%">Totale</th>
            <th></th>
        </tr
        </thead>
        </table>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php
                foreach ($product->getData('Panier') as $item):
                $cart = $product->getProduct($item['id_produit']);
                $subTotal[] = array_map(function ($item){
                ?>
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <tbody>
                            <tr>
                                <td class="shoping__cart__item">
                                        <img src="<?php echo $item['image_produit'] ?? './img/product/7.jpg';?>" alt="" height="200" width="200">
                                        <h5><b><?php echo $item['Nom_produit'] ?? 'Unknown'; ?></b></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        <?php
                                        echo $item['prix'] ?? 'Unknown';
                                        ?>DH
                                    </td>
                                     <td class="shoping__cart__quantity">
                                         <div class="qty d-flex pt-2">
                                             <div class="d-flex font-rale w-30">
                                                 <button class="qty-up border bg-light"  data-id="<?php echo $item['id_produit'] ?? '0'; ?>"><i class="fas fa-angle-up"></i></button>
                                                 <input type="text"  data-id="<?php echo $item['id_produit'] ?? '0'; ?>" class="qty_input border px-2 w-100 bg-light"  value="1" placeholder="1">
                                                 <button  data-id="<?php echo $item['id_produit'] ?? '0'; ?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                             </div>
                                         </div>
                                     </td>
                                    <td class="shoping__cart__total">
                                        <?php
                                        echo $item['prix']  ?? 'Unknown';
                                        ?>DH
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <form method="post">
                                        <input type="hidden" value="<?php echo $item['id_produit'] ?? 0; ?>" name="item_id">
                                        <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger px-3 border-right-0"><b>Retirer</b></button>
                                        </form>
                                    </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <?php
                    return $item['prix'];
                    },$cart);//Fermeture de la fonction array_map//
                    endforeach;
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <form method="post" action="traitement.php">
                        <a href="Boutique.php" class="primary-btn text-white   cart-btn" style="background-color: blue">Continuer mes achats</a>
                        <a href="shoping-cart.php" class="primary-btn text-white border-0 cart-btn cart-btn-right" style="background-color: blue"><span class="icon_loading"></span>
                            Mettre à jour le panier</a>
                        </form>
                    </div>
                </div>
                <!--<div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    --></div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5></h5>
                        <ul>
                            <li>Totale<span><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0;   ?>DH</span></li>
                        </ul>
                        <a href="checkout.php" class="primary-btn" style="background-color: blue">Confirmer la Commande</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Shoping Cart Section End -->

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
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- Owl Carousel Js file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

<!--  isotope plugin cdn  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>
<!-- Js Plugins -->

    <script src="js/index.js"></script>

</body>

</html>