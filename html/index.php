<?php 
 session_start() ;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashoinDw</title>

    <!-- icons lien-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- icons lien-->

    <!-- CSS lien-->
    <link rel="stylesheet" href="../style/style.css">
    <!-- CSS lien-->

    <!-- CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Bootstrap lien-->
</head>

<body>
    <section id="header">
        <a href="#"><img src="../images/logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li> <a class="active" href="index.html">Accueil</a></li>
                <li> <a href="Homme.html">Homme</a></li>
                <li> <a href="Femme.html">Femme</a></li>
                <li> <a href="Enfants.html">Enfants</a></li>
                <li> <a href="Contact.html">Contact</a></li>
                <li id="lg-bag"> <a href="panier.php"><i class='bx bx-cart'></i> <span class="badge bg-dark text-white ms-1 rounded-pill">
                    <?=array_sum($_SESSION['panier'])?></span>   </a></li>
                <a href="#" id="close"><i class='bx bx-arrow-back'></i></a>

                <!-- <form action="">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit" value="search"><img src="../images/icon/search.png" alt="search"></button>
                </form>-->
            </ul>
        </div>
        <div id="mobile">
            <a href="panier.php"><i class='bx bx-cart'></i></a>
            <i id="bar" class='bx bx-menu'></i>
        </div>
    </section>

    <section id="carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-interval="1400" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../images/carousel/jean_caroussel.jpg" class="d-block w-100" alt="t-shirt vitrine">
                </div>
                <div class="carousel-item">
                    <img src="../images/carousel/jordan_caroussel.jpg" class="d-block w-100" alt="jean vitrine">
                </div>
                <div class="carousel-item">
                    <img src="..//images/carousel/sneaker_caroussel.jpg" class="d-block w-100" alt="sneaker vitrine">
                </div>
                <div class="carousel-item">
                    <img src="../images/carousel/t-shirt_caroussel.jpg" class="d-block w-100" alt="jordan vitrine">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe_box">
            <img src="../images/livraison gratuite.png" alt="livraison gratuite">
            <h6>livraison gratuite</h6>
        </div>
        <div class="fe_box">
            <img src="../images/commande.jfif" alt="livraison gratuite">
            <h6>Commande</h6>
        </div>
        <div class="fe_box">
            <img src="../images/save moeny.png" alt="livraison gratuite">
            <h6>Économiser </h6>
        </div>
        <div class="fe_box">
            <img src="../images/pro.png" alt="livraison gratuite">
            <h6>Promotions</h6>
        </div>
        <div class="fe_box">
            <img src="../images/livraison gratuite.png" alt="livraison gratuite">
            <h6>Bonne vente</h6>
        </div>
        <div class="fe_box">
            <img src="../images/support.png" alt="Assistance 24h/24">
            <h6>Assistance 24h/24</h6>
        </div>

    </section>


   

    <section id="products" class="section-p1">
        <h2>Produits Populaires</h2>
        <p>Nouvelle collection</p>

        <?php 
    //inclure la page de connexion
    include_once "connexion.php";
    $req = mysqli_query($con, "SELECT * FROM clothes");
    while($row = mysqli_fetch_assoc($req)){
    ?>

        <div class="pro-container">
            <div class="pro">
                <img src="../images/asset/<?=$row['image']?>" alt="">
                <div class="des">
                    <span><?=$row['description']?></span>
                    <h5><?=$row['name']?></h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4><?=$row['price']?>€</h4>
                    </div>
                </div>

                <?php } ?>


                <i class='bx bx-cart cart'></i>
            </div>
            <div class="pro">
                <img src="../images/about/team-1.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>€47</h4>
                    </div>

                </div>
                <i class='bx bx-cart cart'></i>
            </div>
            <div class="pro">
                <img src="../images/about/team-2.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>€47</h4>
                    </div>

                </div>
                <i class='bx bx-cart cart'></i>
            </div>
            <div class="pro">
                <img src="../images/about/team-1.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>€47</h4>
                    </div>

                </div>
                <i class='bx bx-cart cart'></i>
            </div>
            <div class="pro">
                <img src="../images/banner/banner-2.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>€47</h4>
                    </div>

                </div>
                <i class='bx bx-cart cart'></i>
            </div>
            <div class="pro">
                <img src="../images/about/team-4.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>€47</h4>
                    </div>

                </div>
                <i class='bx bx-cart cart'></i>
            </div>
            <div class="pro">
                <img src="../images/about/team-3.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>€47</h4>
                    </div>

                </div>
                <i class='bx bx-cart cart'></i>
            </div>
            <div class="pro">
                <img src="../images/about/team-2.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>€47</h4>
                    </div>

                </div>
                <i class='bx bx-cart cart'></i>
            </div>


        </div>
    </section>

    <section id="banner" .section-m1>
        <h4>Services De Réparation</h4>
        <h2>Jusqu'à <span>70 % de réduction </span>-Tous les t-shirts et accessoires</h2>
        <button class="normal">Explore plus</button>
    </section>

    <section id="products" class="section-p1">
        <h2>Nouveaux arrivages</h2>
        <p>Collection d'été Nouveau design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="../images/about/team-1.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>€47</h4>
                    </div>
                </div>
                <i class='bx bx-cart cart'></i>
            </div>
            <div class="pro">
                <img src="../images/about/team-2.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>€47</h4>
                    </div>
                </div>
                <i class='bx bx-cart cart'></i>
            </div>
            <div class="pro">
                <img src="../images/about/team-4.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>€47</h4>
                    </div>
                </div>
                <i class='bx bx-cart cart'></i>
            </div>
            <div class="pro">
                <img src="../images/about/team-3.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>€47</h4>
                    </div>
                </div>
                <i class='bx bx-cart cart'></i>
            </div>
            <div class="pro">
                <img src="../images/about/team-4.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>€47</h4>
                    </div>
                </div>
                <i class='bx bx-cart cart'></i>
            </div>
            <div class="pro">
                <img src="../images/about/team-1.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>€47</h4>
                    </div>
                </div>
                <i class='bx bx-cart cart'></i>
            </div>
            <div class="pro">
                <img src="../images/about/team-3.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>€47</h4>
                    </div>
                </div>
                <i class='bx bx-cart cart'></i>
            </div>
            <div class="pro">
                <img src="../images/about/team-2.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>€47</h4>
                    </div>
                </div>
                <i class='bx bx-cart cart'></i>
            </div>
        </div>
    </section>
    <section id="newsletter" class="section-p1 class=" section-m1 ">
        <div class=" newstext ">
            <h4>S'inscrire aux Newsletters</h4>
            <p>Recevez des mises à jour par e-mail sur notre dernière boutique <span>offres spéciales</span>
            </p>
        </div>
        <div class=" form ">
            <input type=" text " placeholder=" Votre adresse e-mail ">
            <button class=" normal ">S'inscrire</button>
        </div>
    </section>

    <footer class=" section-p1 ">

        <div class=" col ">
            <div class=" footer-services ">
                <h3>Nos Réseaux</h3>
                <ul class=" list-services "></ul>
                <li> <a href=" "><i class='bx bxl-facebook-circle' ></i></a></li>
                <li> <a href=" "><i class='bx bxl-instagram' ></i></a></li>
                <li> <a href=" "><i class='bx bxl-pinterest' ></i></a></li>
                <li> <a href=" "><i class='bx bxl-youtube'></i></a></li>

            </div>
        </div>

        <div class=" col ">
            <div class=" footer-horaires ">
                <h3>HORAIRES</h3>
                <ul class=" hor ">
                    <li> Lun 09:00 à 20:00</li>
                    <li> Mar 09:00 à 20:00</li>
                    <li> Mer 09:00 à 20:00</li>
                    <li> Jeu 09:00 à 20:00</li>
                    <li> Ven 09:00 à 20:00</li>
                    <li> Sam 09:00 à 20:00</li>
                    <li> Dim 09:00 à 20:00</li>
                </ul>
            </div>
        </div>

        <div class=" col ">
            <div class=" payments ">
                <h3>MODE DE PAYEMENTS</h3>
                <p><i class='bx bxs-credit-card'></i>&nbspCredit carte</p>
                <p><i class='bx bxl-paypal'></i>&nbsp paypal</p>
                <p><i class='bx bxl-bitcoin'></i>&nbsp bitcoin</p>
            </div>
        </div>

        <div class=" col ">
            <div class=" contacts ">
                <h3>CONTACT</h3>
                <p><i class='bx bxs-phone-call'></i>&nbsp 01 22 33 33 33</p>
                <p><i class='bx bx-envelope'></i>&nbsp d_fashion@dw19.com</p>
                <p class=" parg "><i class='bx bxs-map'></i>&nbsp 2 rue Jean Mermoz
                    <p>Batîment ARC EN CIEL <br>91080 COURCOURONNES</p>
                </p>
            </div>
        </div>
    </footer>

    <script src=" ../js/javascript.js "></script>
</body>

</html>