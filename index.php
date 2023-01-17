<?php
if (isset($_GET['accepte-cookies'])) {
    setcookie('accepte-cookies', 'true', time() + 365 * 24 * 3600);
    header('location:./');
    die();
}
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content=" LMX auto remorquage est une entreprise d'enlèvement d'épaves gratuit et de véhicules accidentés en yvelines ,Ile-de-France paris et sa région.......Dépannages ,Pièces détachées,Détachées Autos,Fourrière,Camions,Contrôle technique,Remorque,Mécanicien ,Carrosserie ,Remorquage de votre véhicule,Accidentés,Diesel,Climatisation , Garage automobile ,Service rapide,Remorquer,Dépannage automobile,Garagistes,Mécaniciens,Agrément,Dépanner,Sous-sol">
    <title>LMX-Auto-Remorquage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="./img/log.jpg">
    <link rel="stylesheet" href="css/style.css">

</head>



<body class="container-fluid">
    <header>
        <!--header-->
        <!--right-->
        <div class=" row right">
            <div class=" col-md-3 ">
                <img class="img-fluid" src="./img/log.jpg" alt="Toutes distances,Dépanneur remorqueur, Remorquage moto,Véhicules utilitaires,Logo lmx_remorquage/Dépannage,lmx auto remorquage,LMX AUTO REMORQUAGE, Moto ou scooter, Camions,Remorquage de votre véhicule,Dépannage sur place,Fourrière, lmxremorquage.fr ,contrôle technique ,Agrément ,Remorquage automobile,Service de dépannage,Transport de véhicules ,Véhicule de remplacement,Remorquage voiture">
            </div>

            <div class="col-md-6  text-center align-self-center">
                <h1 class="fw-bold">LMX Auto Remorquage</h1>
            </div>
            <div class="col-md-3 md-text-end align-self-center">
                <h3 class="text-danger"><i class="fa-solid  fa-phone"></i> <b>07 52 77 52 77</b></h3>
            </div>

        </div>
        <!--left-->

        <div class=" row left ">
            <nav class="nav justify-content-center ">
                <a class="nav-link text-light" href="#qui-sommes">Qui sommes nous ?</a>
                <a class="nav-link text-light" href="#services">Services</a>
                <a class="nav-link text-light" href="#Actualités">Actualités</a>
                <a class="nav-link text-light" href="#contact">Contact</a>
            </nav>
        </div>
    </header>
    <div class="row text-center">
        <div class="col-12">
            <img class="img-fluid" src=" img/principale.jpg" alt="Service de remorquage,Poids-lourd,Assurance-auto,Autoroutes,Sous-sol,Type de véhicule,Remorquage de véhicules,Dépanneuse /véhicule,accident ,panne ,Ile-de-France">
        </div>
    </div>
    <hr>

    <!--MAIN-->
    <main>
        <!--Qui sommes nous?-->
        <h2 id="qui-sommes" class="  fw-bold ">Qui sommes nous ?</h2>
        <div class="partie1">


            <div class="col-10 mt-5 mx-auto">

                <div class="bg-light p-3 shadow">

                    <h3 class=" fw-bold text-center text-primary">Bienvenue chez LMX Auto Remorquage</h3>
                    <p class=" fw-bold  pt-5 ps-5"> La société LMX Auto assure 24h/24h - 7/7 tous les types de véhicules
                        et 2
                        roues : </p>
                    <ul class="fw-bold  text-secondary ps-5">

                        <li class="text-danger">Enlèvement d'épaves gratuit</li>
                        <li>Dépannage</li>
                        <li>Remorquage</li>
                        <li>Transport</li>
                    </ul>

                    <p class=" fw-bold ps-5">
                        Enlèvement GRATUIT des épaves en Ile-de-France et en France, ainsi que d'autres services à des
                        prix attractifs.
                        <br>
                        Nous proposons également nos services de Diagnostic (Valise auto) de votre véhicule :
                    </p>
                    <ul class="fw-bold text-secondary  ps-5">
                        <li>FAP</li>
                        <li>EGR</li>
                        <li>ADBLUE</li>
                        <li>REPARATION ELECTRIQUE</li>
                        <li>PROBLEME CALCULATEUR MOTEUR</li>
                        <li>PROGRAMMATION DE DOUBLE CLEFS</li>
                    </ul>

                    <p class="fw-bold ps-5">Contactez-nous pour obtenir un devis GRATUIT ou pour toute autre
                        information.</p>

                </div>
            </div>
        </div>

        <!--Services-->
        <div class="partie2">
            <div class="row  pt-5">
                <h2 id="services" class="fw-bold ">Services</h2>

                <div class="col-md-3 text-center">

                    <img src="img/111.jpg" class="img-fluid rounded-circle" alt="épaves gratuit ,Intervention rapide dans le 78 ,95 , 27 , 60 , ">

                    <div class="card-body text-start">
                        <h4 class=" text-danger fw-bold">Enlèvement d'épaves GRATUIT</h4>
                        <p class="fw-bold text-secondary">Nous intervenons gratuitement sur le lieu de votre choix et
                            réalisons l'enlèvement de votre véhicule épave gratuitement.<br>
                            Intervention rapide par téléphone<br>
                            Suivi administratif<br>
                            Afin de simplifier la procédure, la liste des documents à nous fournir, le jour du retrait
                            de votre épave de véhicule est :
                            <span class="text-primary"> La Carte Grise originale et la
                                photocopie votre Carte d’identité.</span>
                        </p>
                    </div>

                </div>
                <div class="  col-md-3 text-center ">
                    <img src="img/3.jpg" class="img-fluid rounded-circle" alt=" Dépannage ,enlèvement,épaviste Dépanneurs, Dépannage automobile ,Rapatriement,Dépannage-remorquage,paris Ile-de-France 7/7 24/24">
                    <div class="card-body text-start">
                        <h4 class=" text-info fw-bold ">Dépannage</h4>
                        <p>
                            <li class="fw-bold text-secondary">Dépannage auto 7/7 </li>
                            <li class=" fw-bold text-secondary">Devis gratuit en nous appelant</li>

                            <br>
                            <span class="text-primary fw-bold">

                                Vous êtes en Ile de France ?
                                Votre véhicule est en panne et ne démarre plus!
                                Vous avez besoin d'un dépanneur ?
                                Appelez notre entreprise de dépannage et remorquage automobiles en urgence.<br> 7j/7 et
                                24h/24.</span>
                        </p>
                    </div>
                </div>
                <div class=" col-md-3  text-center ">
                    <img src="img/cléejpg.jpg" class="img-fluid rounded-circle" alt=" double clé ,Remorque,Carrosserie,Dépanner, clef ,clés ,clefs , perte , casse ,vol ,Programation double clé  ">
                    <div class="card-body text-start">
                        <h4 class=" text-info fw-bold">Programmation de double clefs</h4>
                        <ul class="fw-bold text-secondary">
                            <li>Reprogrammation de double clefs </li>
                            <li>Perte </li>
                            <li>Casse</li>
                            <li>Vol</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <img src="img/entete2.jpg" class="img-fluid rounded-circle" alt=" Diagnostic ,Prêt d un véhicule,Motos,diagnostique automobile, Réparation calculateur ,Réparation ELECTRIQUE , suppression FAP , EGR ,ADBLUE , ">
                    <div class="card-body text-start">
                        <h4 class=" text-info fw-bold">Diagnostic automobile</h4>
                        <ul class="fw-bold text-secondary">
                            <li>Réparation calculateur </li>
                            <li> Suppression : FAP / EGR / ADBLUE</li>
                            <li>Réparation éléctrique</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Actualités-->
        <div id="Actualités" class="lightbox-gallery mx-5">
            <div class="intro">
                <div>
                    <h3 class="text-center">Actualités</h3>
                    <p class="text-center">Découvrez-nous</p>
                </div>
            </div>
            <div class="row photos mx-3">
                <div class="col-sm-6 col-md-4 col-lg-3  item"><a href="img/1.jpg" data-lightbox="photos"><img alt="voiture accidenté 
            Toutes les marques ,Immobilisation
           " class="img-fluid" src="img/1.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3   item"><a href="img/2.jpg" data-lightbox="photos"><img alt="voiture abandonnée ,Assistance-dépannage, Utilitaires" class="img-fluid" src="img/2.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3   item"><a href="img/4.jpg" data-lightbox="photos"><img alt="Remorquage  Voiture en panne,,enlevement,Autos,Crevaison,Remorquage auto  Réparations " class="img-fluid" src="img/4.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/entete3.jpg" data-lightbox="photos"><img alt="diagnostique electrique,Contrôle technique, Pannes ,Légers" class="img-fluid" src="img/entete3.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/44.jpg" data-lightbox="photos"><img alt="accident,Agréé , Remorqueur ,Garagiste " class="img-fluid" src="img/44.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/6.jpg" data-lightbox="photos"><img alt="accident autoroute,Ma voiture ,Véhicules légers Agréés ,Poids-lourds" class="img-fluid" src="img/6.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/7.jpg" data-lightbox="photos"><img alt="parechoc véhicule  , Pneu ,accident" class="img-fluid" src="img/7.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/8.jpg" data-lightbox="photos"><img alt="roues  voitures,Faites appel,Utilitaire" class="img-fluid" src="img/8.jpg"></a></div>
            </div>
        </div>
        <!--CONTACT-->
        <div class="partie4">
            <h2 id="contact" class="fw-bold ">Contact</h2>
            <div class="col-md-5 icon text-center">
                <h4 class="text-center text-secondary fw-bold">Retrouvez-nous également sur :</h4>
                <p class="fs-3 pt-5 text-primary text-center"><i class="fa-solid  fa-phone"></i> <b>07 52 77 52 77</b>
                </p>
                <p class="fs-4 text-primary text-center"> <i class="  fa-solid fa-envelope">
                    </i> <b> lmxremorquage@gmail.com</b> </p>
                <div>
                    <a href="https://www.facebook.com/profile.php?id=100088195673300" target="_blank"><i class=" hidden-icon1 fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/lmx_remorquage/" target="_blank"><i class=" hidden-icon2  fa-brands fa-instagram"></i></a>

                </div>
            </div>
        </div>
    </main>

    <!--FOOTER-->
    <footer class="py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a class=" fw-bold text-light" href="index.php">Haut de page</a>
            </p>
            <p class="mb-1 text-light"> <span class="text-warning fw-bold"> ©LMX-AUTO-REMORQUAGE</span> ,Mise en relation avec des professionnels du dépannage et remorquage au meilleur prix.
            </p>
            <p class=" text-light">Inc <a class=" text-light fw-bold" href="mentions-legales-site-internet.txt"> Mentions Légales </a>.</p>
        </div>
    </footer>
  
    <?php
    if (!isset($_COOKIE['accepte-cookies'])) {
    ?>
        <div class="banniere">
            <div class="text-banniere">
                <p>Notre site utilise des cookies pour une meilleure experience</p>
            </div>
            <div class="button-banniere">
                <a href="?accepte-cookies">OK,j'accepte</a>
            </div>

        </div>
    <?php
    }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    </script>

</body>


</html>