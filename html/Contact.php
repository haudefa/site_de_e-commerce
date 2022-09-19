<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <section id="header">
        <a href="#"><img src="../images/footer-logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li> <a href="index.html">Accueil</a></li>
                <li> <a href="Homme.html">Homme</a></li>
                <li> <a href="Femme.html">Femme</a></li>
                <li> <a href="Enfants.html">Enfants</a></li>
                <li> <a class="active" href="Contact.html">Contact</a></li>
                <li id="lg-bag"> <a href="cart.html"><i class='bx bx-cart'></i></a></li>
                <a href="#" id="close"><i class='bx bx-arrow-back' ></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class='bx bx-cart'></i></a>
            <i id="bar" class='bx bx-menu'></i>
        </div>
    </section>

    <section>

        <div class="cont-container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 pb-5">


                    <!--Form with header-->
                    <form action="contactmail.php" method="post">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Contactez-nous</h3>
                                    <p class="m-0">Nous vous aiderons avec plaisir</p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="name" placeholder="Nom et prénom" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="nombre" name="email" placeholder="écrivez votre e-mail" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="Sujet" class="form-control" id="nombre" name="Sujet" placeholder="Votre Sujet" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" placeholder="Envoyez-nous votre message" required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Envoyer" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>

                        </div>
                    </form>
                    <!--Form  header-->
                </div>
            </div>
        </div>
    </section>

    <section>
     <!-- Map Begin -->
     <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d111551.9926412813!2d-90.27317134641879!3d38.606612219170856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1597926938024!5m2!1sen!2sbd" height="400" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</section>

     <!--footer-->
     <footer class="section-p1 ">
<div class="col ">
    <div class="footer-services ">
        <h3>Nos Réseaux</h3>
        <ul class="list-services "></ul>
        <li> <a href=" "><i class='bx bxl-facebook-circle' ></i></a></li>
        <li> <a href=" "><i class='bx bxl-instagram' ></i></a></li>
        <li> <a href=" "><i class='bx bxl-pinterest' ></i></a></li>
        <li> <a href=" "><i class='bx bxl-youtube'></i></a></li>

    </div>
</div>

<div class="col ">
    <div class="footer-horaires ">
        <h3>HORAIRES</h3>
        <ul class="hor ">
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

<div class="col ">
    <div class="payments ">
        <h3>MODE DE PAYEMENTS</h3>
        <p><i class='bx bxs-credit-card'></i>&nbspCredit carte</p>
        <p><i class='bx bxl-paypal'></i>&nbsp paypal</p>
        <p><i class='bx bxl-bitcoin'></i>&nbsp bitcoin</p>
    </div>
</div>

<div class="col ">
    <div class="contacts ">
        <h3>CONTACT</h3>
        <p><i class='bx bxs-phone-call'></i>&nbsp 01 22 33 33 33</p>
        <p><i class='bx bx-envelope'></i>&nbsp d_fashion@dw19.com</p>
        <p><i class='bx bxs-map'></i> &nbsp 2 rue Jean Mermoz 91080</p>

    </div>
</div>
</footer>

    <script src="../js/javascript.js "></script>
</body>

</html>