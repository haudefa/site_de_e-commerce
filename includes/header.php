<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- slider stylesheet -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- link Boostrap -->
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/bootstrap.css">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<!-- link icon -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- link CSS -->
    <link rel="stylesheet" href="../style/style_h.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/responsive.css">
    <link rel="stylesheet" href="../style/style_femme.css">
    <link rel="stylesheet" href="../style/kid_style.css">
    <title>Document</title>
</head>
<body>
    <section id="header">
        <a href="#"><img src="../images/footer-logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li> <a class="active" href="index.html">Accueil</a></li>
                <li> <a href="Homme.php">Homme</a></li>
                <li> <a href="Femme.php">Femme</a></li>
                <li> <a href="Enfants.php">Enfants</a></li>
                <li> <a href="Contact.php">Contact</a></li>
            <?php if(empty($_SESSION)) {?>
                <li><a   data-bs-toggle="modal" data-bs-target="#signupModal">S'incrire</a></li>
                <li ><a  data-bs-toggle="modal" data-bs-target="#loginModal">Se connecter</a></li>
            <?php }?>
            <?php if (!empty($_SESSION)) { ?>
                <li><a  href="logout.php">Déconnexion</a></li>
            <?php } ?>
                <li id="lg-bag"> <a href="cart.html"><i class='bx bx-cart'></i></a></li>
                <li><a href="#" id="close"><i class='bx bx-arrow-back' ></i></a> </li>   
                 
                <!-- panier  -->
                <!-- <div class="shop">
                    <a href="panier.php" class="link"><button class="btn btn-light mb" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Panier
                            <span class="badge bg-dark text-white ms-1 rounded-pill">
                    
                            </span></span></span>
                        </button></a>
                </div> -->
                <!-- panier  -->

            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class='bx bx-cart'></i></a>
            <i id="bar" class='bx bx-menu'></i>
        </div>
    </section>
    <!-- début de la modal -->
        <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content ">
                    <div class="modal-header">
                <!--m--><h5 class="modal-title" id="signupModalLabel">Inscription</h5>
                <!--m--><button type="button" class=" btn btn-close" data-bs-dismiss="modal" >
                        <!-- <span aria-hidden="true">&times;</span> -->
                        </button>
                    </div>
                    <!-- signupModalLabel -->
                    <div class="modal-body " >
                        <!--m--><form class="p-3  overflow-auto " action="signUp.php" method="post">
                        <div class="input-group ">
                            <div class="form-floating mb-3">
                                <input class=" form-control" type="text" name="firstname" id="firstname" placeholder="Prénom" autocomplete="off" required>
                                <label  for="firstname">prénom</label>
                            </div>
                        </div>
                            <div class="form-floating mb-3">
                                <input class="  form-control" type="text" name="lastname" id="lastname" placeholder="lastname" autocomplete="off" required>
                                <label for="lastname">Nom</label>
                            </div>
                           
                            <div class="form-floating mb-3">
                                <input class="  form-control" type="text" name="address" id="address" placeholder="lastNom" autocomplete="off" required>
                                <label for="address">Adresse</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="  form-control" type="text" name="phone_number" id="phone_number" placeholder="number" autocomplete="off" required>
                                <label for="phone_number">Numero de teléphone</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="  form-control" type="email" name="mail" id="mail" placeholder="Adresse email" autocomplete="off" required>
                                <label for="mail">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="  form-control" type="password" name="password" id="password" placeholder="Mot de passe" autocomplete="off" required>
                                <label for="password">Mot de passe</label>
                            </div>
                                <div class="row  justify-content-center">
                            <input  class="col-10 col-md-8 btn btn-primary  " type="submit" value="Valider">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
            
            <!-- fin -->


    
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Conection</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <!-- <span aria-hidden="true">&times;</span> -->
                    </button>
                </div>
                <!-- loginModalLabel -->
                <div class="modal-body">
                    <form class="p-3" action="login.php" method="post">
                        <div class="form-floating mb-3" >
                            <input class=" form-control" type="email" name="mail" id="mail" placeholder="Adresse email" autocomplete="off" required>
                            <label for="mail">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class=" form-control" type="password" name="password" id="password" placeholder="Mot de passe" autocomplete="off" required>
                            <label for="password">Mot de passe</label>
                        </div>
                        <div class="row mb-3 justify-content-center">
                            <input  class="col-10 col-md-8 btn btn-primary  " type="submit" value="Valider">
                        </div>
                    </form>
                </div>
                <div class="modal-footer h-0">
                </div>
            </div>
        </div>
    </div>
    