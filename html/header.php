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
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../style/style_h.css">
    <link rel="stylesheet" href="../style/style.css">
    <title>Document</title>
</head>
<body>
    <section id="header">
        <a href="#"><img src="../images/footer-logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li> <a class="active" href="index.html">Accueil</a></li>
                <li> <a href="Homme.php">Homme</a></li>
                <li> <a href="Femme.html">Femme</a></li>
                <li> <a href="Enfants.php">Enfants</a></li>
                <li> <a href="Contact.html">Contact</a></li>
                <li id="lg-bag"> <a href="panier.php"><i class='bx bx-cart'></i></a></li>
                <a href="#" id="close"><i class='bx bx-arrow-back' ></i></a>
                
                <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAX1JREFUSEu1leExRDEUhb+tABWgAnRABagAHVABHaACVMBWQAfogApQAfPtJDvZbJK32bGZyY/33n333Hty7smIFa/RivOzCMARcAjshm1Nb2E/AeNWkS2AfeAO2Bro8gM4A15KcTWAK+Cyk75z4Db/pwRg4HVn8hh+Adyk/+YA0vK8ZPL420FKVw4gn5sFgB9A2u7Dt9PwvFaINcd2fJ8CqJbHSvVzrQMtKo8BFTYjU6s7qQBsAN/Zt3XgqxL/ANjlDIDa3vknAHPt5QC/jcPtpWiaOz2DFoD0eMi27pJKn6Wptia5U4AWRb3KfY+2kgK0DvkzaFsJurQPZ6Ykab8XD7kkU/Xv+6LPBBDlmM9DUaYi54OmEqSutXTZ1yTAbqcGOWQV0qaC8hmI+TxkHdcu42pahUH5hJpcA9P3YzdW7R1hbKqkQbOLVSzjqKVZad5oqkSKakqJxci5ttB14aSHKr9uaYlWos6lSwVNTK05bb1T1BO/yKXfk28u9g8XyEkZRdC/1QAAAABJRU5ErkJggg=="/>
                    </a>
                   
                        <ul class="dropdown-menu bg-dark" aria-labelledby="account  Dropdown">
                            <?php if(empty($_SESSION)) {?>
                            <li><a class="dropdown-item"  href="#" data-bs-toggle="modal" data-bs-target="#signupModal">S'incrire</a></li>
                            <li ><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Se connecter</a></li>
                            <?php }?>
                            <?php if (!empty($_SESSION)) { ?>
                            <li><a class="dropdown-item" href="logout.php">Déconnexion</a></li>
                            <?php } ?>
                            <!-- <button type="button" class="nav-link btn btn-light " data-bs-toggle="modal" data-bs-target="#signupModal">
                              S'incrire
                            </button>
                            <button type="button" class="nav-link btn btn-light" data-bs-toggle="modal" data-bs-target="#loginModal">
                             Se connecter
                            </button> -->
                        </ul>
                </li>
          
                

                <!-- <form action="">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit" value="search"><img src="../images/icon/search.png" alt="search"></button>
                </form>-->
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class='bx bx-cart'></i></a>
            <i id="bar" class='bx bx-menu'></i>
        </div>
    </section>
        <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="signupModalLabel">Inscription</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- signupModalLabel -->
                    <div class="modal-body">
                        <form class="p-3" action="signUp.php" method="post">
                            <div class="row mb-3">
                                <label class="col-12 col-md-3 pl-0" for="firstname">Prénom</label>
                                <input class="col-12 col-md-9" type="text" name="firstname" id="firstname" placeholder="Prénom" required>
                            </div>
                            <div class="row mb-3">
                                <label class="col-12 col-md-3 pl-0" for="lastname">Nom</label>
                                <input class="col-12 col-md-9" type="text" name="lastname" id="lastname" placeholder="lastname" required>
                            </div>
                           
                            <div class="row mb-3">
                                <label class="col-12 col-md-3 pl-0" for="address">Adresse</label>
                                <input class="col-12 col-md-9" type="text" name="address" id="address" placeholder="lastNom" required>
                            </div>
                            <div class="row mb-3">
                                <label class="col-12 col-md-3 pl-0" for="phone_number">Numero de teléphone</label>
                                <input class="col-12 col-md-9" type="text" name="phone_number" id="phone_number" placeholder="number" required>
                            </div>
                            <div class="row mb-3">
                                <label class="col-12 col-md-3 pl-0" for="mail">Email</label>
                                <input class="col-12 col-md-9" type="email" name="mail" id="mail" placeholder="Adresse email" required>
                            </div>
                            <div class="row mb-3">
                                <label class="col-12 col-md-3 pl-0" for="password">Mot de passe</label>
                                <input class="col-12 col-md-9" type="password" name="password" id="password" placeholder="Mot de passe" required>
                            </div>
                            <div class="row mb-3 justify-content-end">
                                <input  class="" type="submit" value="Valider">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer h-0">
                    </div>
                </div>
            </div>
        </div>

    
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Conection</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- loginModalLabel -->
                <div class="modal-body">
                    <form class="p-3" action="login.php" method="post">
                        <div class="row mb-3">
                            <label class="col-12 col-md-3 pl-0" for="mail">Email</label>
                            <input class="col-12 col-md-9" type="email" name="mail" id="mail" placeholder="Adresse email" required>
                        </div>
                        <div class="row mb-3">
                            <label class="col-12 col-md-3 pl-0" for="password">Mot de passe</label>
                            <input class="col-12 col-md-9" type="password" name="password" id="password" placeholder="Mot de passe" required>
                        </div>
                        <div class="row mb-3 justify-content-end">
                            <input  class="" type="submit" value="Valider">
                        </div>
                    </form>
                </div>
                <div class="modal-footer h-0">
                </div>
            </div>
        </div>
    </div>
    