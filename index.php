<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>SevHost - Hébergement haute gamme à bas prix.</title>
    </head>
    
    <header>
        <div class="logo"></div>
        <hr class="trait" noshade style="width:100%; height:2px; text-align:left; z-index: 2;">
        <!--Importation de bootstrap et ionicons pour simplifier la réalisation du footer-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    </header>

    <body>
        <div class="menuAcceuil">
            <div class="titre">
                <a href="index.php"><img class="logoSevHost" src="./assets/img/logo.png" alt="logoSevHost"></a>
                <a class="titresite" href="index.php">SevHost</a>
            </div>
            <div class="mail">
                <p>support@sevhost.com</p>
            </div>
            <button id="espaceClient" class="espaceClient">Panier</button>
        </div>

        <nav>
            <ul>
                <li class="menu-deroulant-offres">
                <a href="#">Jeux</a>
                <ul class="sous-menu">
                    <li><a href="./offres/jeux/minecraft.php">Minecraft</a></li>
                    <li><a href="./offres/jeux/fivem.php">FiveM</a></li>
                    <li><a href="./offres/jeux/garry.php">Garry's Mod</a></li>
                </ul>
                </li>
                <li class="menu-deroulant-offres">
                <a href="#">VPS</a>
                <ul class="sous-menu">
                    <li><a href="./offres/vps/ssd.php">VPS SSD</a></li>
                    <li><a href="./offres/vps/nvme.php">VPS NVME</a></li>
                </ul>
                </li>
                <li><a href="./offres/discord.php">Discord</a></li>
                <li><a href="./offres/vp.php">VPN</a></li>
            </ul>
        </nav>

        <img class="imageServeur1" src="./assets/img/Serveur.jpg" alt="image serveur">
        <img class="imageServeur2" src="./assets/img/infogerance-serveur-pme-Paris-Reims.jpg" alt="image serveur">
        <img class="imageServeur3" src="./assets/img/vente-serveur-terra-professionnels-entreprise-nci-calvados-normandie-serveurs-1024x445.jpg" alt="image serveur">

        <h2 class="h2index">Nos serveurs sont ravis de vous accueillir !</h2>
        <p class="descriptionH2index">Depuis l'arrivé de nos SSD NVMe, nous sommes désormais en mesure de vous proposer un service de qualité. <br>Notre entreprise propose des services à prix comptetitif à une vitesse hors-normes.</p>

        <h2 class="h2promotion">Promotion actuelle de -30% sur les offres VPS !</h2>
        <button class="boutonOffres">Consulter nos offres</button>

        <div class="block1"><h1 class="h1block1">Support</h1><p class="pBlock1">Avec SevHost, profitez d'un support 24/24 7/7 avec une équipe toujours prête à vous proposer une aide pour répondre à vos demandes et questions sur nos services.</p></div>
        <div class="block2"><h1 class="h1block2">Notre entreprise</h1><p class="pBlock2">Chez SevHost, notre entreprise est gérée par des personnes compétentes <br> et à l'écoute du client.</p></div>
        <div class="block3"><h1 class="h1Block3">Qualité</h1><p class="pBlock3">Chez SevHost, nous tenons à vous offrir un service de qualité à un prix abordable.</p></div>
        <div class="block4"><h1 class="h1block4">Fiabilité</h1><p class="pBlock4">Avec SevHost, profitez d'une infrastructure fiable dans le temps et des serveurs récents afin de satisfaire toute exigence.</p></div>

        <img class="imageServeur4" src="./assets/img/serveur2.jpg" alt="image serveur">

        <h1 class="h1stats">Quelques chiffres sur notre infrastructure.</h1>
        <p class="pInfrastructure">Pour SevHost, il nous est important de vous partager quelques statistiques sur notre service dans le but de rester le plus transparant possible avec le client.</p>

        <div class="blockstat1">
            <h2 class="compteur">2</h2>
            <p>Serveurs</p>
        </div>
        <div class="blockstat2">
            <h2 class="compteur">250</h2>
            <p>Clients</p>
        </div>
        <div class="blockstat3">
            <h2 class="compteur">1</h2>
            <p>Block d'IP</p>
        </div>

        <!--<a class="boutonRedirectionPanier" href="../panier.php?action=ajout&amp;l=<?php echo $donnees['nom_produit'] ?>&amp;q=1&amp;p=<?php echo $donnees['prix_produit'] ?>">Ajouter au panier</a><br />-->

        <div class="footer-dark"> <!--Footer réalisé à l'aide de Bootstrap et Inoicon étant des modules css qui ont été importé au tout début du site dans le but de réaliser un footer propre et plus simplement avec des icones simples--> 
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                            <h3>Services</h3>
                            <ul>
                                <li><a href="./offres/discord.php">Discord</a></li>
                                <li><a href="./offres/jeux/minecraft.php">Minecraft</a></li>
                                <li><a href="./offres/jeux/fivem.php">FiveM</a></li>
                                <li><a href="./offres/jeux/garry.php">Garry's Mod</a></li>
                                <li><a href="./offres/vps/ssd.php">VPS SSD</a></li>
                                <li><a href="./offres/vps/nvme.php">VPS NVME</a></li>
                                <li><a href="./offres/vp.php">VPN</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 item">
                            <h3>A propos</h3>
                            <ul>
                                <li><a href="./TOS.html">CGU</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 item text">
                            <h3>SevHost</h3>
                            <p>SevHost est une entreprise nouvelle dans le domaine du cloud et de l'Hébergement en ligne.
                                Ayant pour but de proposer à leurs clients un service de qualité tout en gardant un prix raisonable.
                            </p>
                        </div>
                        <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                    </div>
                    <p class="copyright"><?php echo date('Y'); ?> SevHost ©</p> <!--echo date Y sert à récupérer la date mais dans ce cas précis le Y repésente Year = Année, autrement dit on récupère seulement l'année pour l'importer dans le site-->
                </div>
            </footer>
        </div>

        <style>
            /* Importation des polices */
            @font-face {
                font-family: overpassBold;
                src: url("./assets/fonts/Overpass-Bold.ttf");
            }

            @font-face {
                font-family: overpassRegular;
                src: url("./assets/fonts/Overpass-Regular.ttf");
            }

            /* Animation pour les images sur la page index*/
            @keyframes hautBas {
                0% { transform: translate(0,0px); }
                50% { transform: translate(0,20px); }
                100% { transform: translate(0,0px); }
            }

            .titresite {
                position: absolute;
                top: 27px;
                left: 90px
            }

            .logoSevHost {
                position: absolute;
                top: 7px;
            }

            .trait {
                position: absolute;
                top: 50px;
            }

            .mail {
                position: absolute;
                top: 20px;
                left: 975px;
                font-family: overpassRegular;
            }

            .espaceClient {
                background-color: #008CBA; /* Bleu */
                border: none;
                color: white;
                padding: 10px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                border-radius: 4px;
                position: absolute;
                top: 9px;
                left: 1150px;
                height: 50px;
            }

            /* Animations pour le menu d'offres */
            @keyframes rotationFleche {
                0% { transform: rotate(0deg); }
                100%{ transform: rotate(90deg); }
            }
            @keyframes apparitionSousMenu {
                0% {
                box-shadow: 0px 3px 3px 1px rgba(0,0,0,0);
                border-top: 3px solid #2169EC;
                }
                30% {
                box-shadow: 0px 3px 3px 1px rgba(0,0,0,0.3);
                }
                100% {
                max-height: 50em;
                border-top: 3px solid #2169EC;
                box-shadow: 0px 3px 3px 1px rgba(0,0,0,0.3);
                }
            }
            * {
                margin: 0px;
                padding: 0px;
                font-family: Montserrat, sans-serif;
            }
            nav {
                z-index: 4;
                width: 50%;
                font-size: 15px;
                position: absolute;
                top: 110px;
                left: 370px;
                z-index: 4;
            }
            nav > ul {
                display: flex;
                text-align: center;
                box-shadow: 0px 1px 2px 1px rgba(0,0,0,0.3);
                height: 60px
            }
            nav ul {
                list-style-type: none;
            }
            nav > ul > li {
                background-color: white;
                position: relative;
                height: 100%;
                flex: 1;
            }
            nav > ul > li > a {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
            li a {
                text-decoration: none;
                color: black;
            }
            .menu-deroulant-offres > a:after{
                content: '❯';
                font-size: 15px;
                margin-left: 7px;
                display: inline-block;
            }
            .sous-menu {
                margin-top: 60px;
                width: 100%;
                text-align: left;
                background-color: white;
                border-radius: 2px;
                overflow: hidden;
                max-height: 0;
            }
            .sous-menu > li > a {
                height: 40px;
                padding-left: 20px;
                width: 100%;
                align-items: center;
                display: flex;
            }

            nav > ul > li:hover > a{
                color: #2169EC;
            }

            .sous-menu > li:hover {
                background-color: rgba(33, 105, 236, 0.3);
            }
            
            .sous-menu > li:hover > a {
                color: white;
            }

            .menu-deroulant-offres:hover > a:after{
                animation: rotationFleche 0.2s linear forwards;
            }

            .menu-deroulant-offres:hover > .sous-menu {
                animation: apparitionSousMenu 1s forwards;
            }

            .imageServeur1 {
                position: absolute;
                top: 200px;
                left: 40px;
                width: 250px;
                -moz-border-radius:7px;
                -webkit-border-radius:7px;
                border-radius:7px;
                animation-name: hautBas;
                animation-duration: 4s;
                animation-iteration-count: infinite;
                transition-timing-function: ease-in-out;
            }

            .imageServeur2 {
                position: absolute;
                top: 270px;
                left: 370px;
                width: 265px;
                -moz-border-radius:7px;
                -webkit-border-radius:7px;
                border-radius:7px;
                animation-name: hautBas;
                animation-duration: 5s;
                animation-iteration-count: infinite;
                transition-timing-function: ease-in-out;
            }

            .imageServeur3 {
                position: absolute;
                top: 420px;
                left: 90px;
                width: 265px;
                -moz-border-radius:7px;
                -webkit-border-radius:7px;
                border-radius:7px;
                animation-name: hautBas;
                animation-duration: 3s;
                animation-iteration-count: infinite;
                transition-timing-function: ease-in-out;
            }

            .h2index {
                position: absolute;
                top: 300px;
                left: 680px;
                display: block;
                font-size: 27px;
                margin-block-start: 0.67em;
                margin-block-end: 0.67em;
                margin-inline-start: 0px;
                margin-inline-end: 0px;
                font-weight: bold;
                font-family: overpassBold;
            }

            .descriptionH2index {
                position: absolute;
                top: 350px;
                left: 680px;
                display: block;
                font-size: medium;
                margin-block-start: 0.67em;
                margin-block-end: 0.67em;
                margin-inline-start: 0px;
                margin-inline-end: 0px;
                font-weight: lighter;
                font-family: overpassLight;
            }

            .h2promotion {
                position: absolute;
                top: 580px;
                left: 320px;
                display: block;
                font-size: 2em;
                margin-block-start: 0.67em;
                margin-block-end: 0.67em;
                margin-inline-start: 0px;
                margin-inline-end: 0px;
                font-weight: bold;
                font-family: overpassBold;
            }

            .boutonOffres {
                background-color: #008CBA; /* Bleu */
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                border-radius: 4px;
                position: absolute;
                top: 650px;
                left: 580px;
                height: 50px;
            }

            .h1block1 {
                font-family: overpassBold;
                position: absolute;
                top: 10px;
                font-size: medium;
            }
            .pBlock1 {
                position: absolute;
                top: 30px;
                font-family: overpassRegular;
                font-size: 15px;
            }
            .block1 {
                position: absolute;
                top: 800px;
                left: 130px;
                padding : 1em;
                width: 40%;
                height: 170px;
                box-sizing: border-box;
                background-image: linear-gradient(#E5E5E5, #CFCFCF);
                box-shadow: -1px 2px 5px 1px rgba(0, 0, 0, 0.7);                  
            }

            .h1block2 {
                font-family: overpassBold;
                position: absolute;
                top: 10px;
                font-size: medium;
            }
            .pBlock2 {
                font-family: overpassRegular;
                position: absolute;
                top: 30px;
                font-size: 15px;
            }
            .block2 {
                position: absolute;
                top: 800px;
                left: 730px;
                padding : 1em;
                width: 40%;
                height: 170px;
                box-sizing: border-box;
                background-image: linear-gradient(#E5E5E5, #CFCFCF);
                box-shadow: -1px 2px 5px 1px rgba(0, 0, 0, 0.7);
            }

            .block3 {
                position: absolute;
                top: 1000px;
                left: 130px;
                padding : 1em;
                width: 40%;
                height: 130px;
                box-sizing: border-box;
                background-image: linear-gradient(#E5E5E5, #CFCFCF);
                box-shadow: -1px 2px 5px 1px rgba(0, 0, 0, 0.7);
            }
            .h1Block3 {
                font-family: overpassBold;
                position: absolute;
                top: 10px;
                font-size: medium;
            }
            .pBlock3 {
                font-family: overpassRegular;
                position: absolute;
                top: 30px;
                font-size: 15px;
            }

            .block4 {
                position: absolute;
                top: 1000px;
                left: 730px;
                padding : 1em;
                width: 40%;
                height: 130px;
                box-sizing: border-box;
                background-image: linear-gradient(#E5E5E5, #CFCFCF);
                box-shadow: -1px 2px 5px 1px rgba(0, 0, 0, 0.7);
            }

            .h1block4 {
                font-family: overpassBold;
                position: absolute;
                top: 10px;
                font-size: medium;
            }

            .pBlock4 {
                font-family: overpassRegular;
                position: absolute;
                top: 30px;
                font-size: 15px;
            }

            .imageServeur4 {
                position: absolute;
                top: 1200px;
                left: 55px;
                width: 40%;
                -moz-border-radius:7px;
                -webkit-border-radius:7px;
                border-radius:7px;
            }

            .h1stats {
                position: absolute;
                top: 1200px;
                left: 620px;
                font-family: overpassBold;
                font-size: larger;
            }

            .pInfrastructure {
                position: absolute;
                top: 1250px;
                left: 620px;
                font-family: overpassRegular;
            }

            .blockstat1 {
                display: inline-block;
                width: 200px;
                height: 155px;
                position: absolute;
                top: 1300px;
                left: 630px;
                background-color: #fff;
                margin-left: 3px;
                margin-right: 3px;
                margin-top: 50px;
                box-shadow: 13px 11px 5px -8px rgb(171 163 163 / 79%);
                -webkit-box-shadow: 13px 11px 5px -8px rgb(171 163 163 / 79%);
                -moz-box-shadow: 13px 11px 5px -8px rgba(171,163,163,.79);
                cursor: default;
            }

            .blockstat2 {
                display: inline-block;
                width: 200px;
                height: 155px;
                position: absolute;
                top: 1300px;
                left: 850px;
                background-color: #fff;
                margin-left: 3px;
                margin-right: 3px;
                margin-top: 50px;
                box-shadow: 13px 11px 5px -8px rgb(171 163 163 / 79%);
                -webkit-box-shadow: 13px 11px 5px -8px rgb(171 163 163 / 79%);
                -moz-box-shadow: 13px 11px 5px -8px rgba(171,163,163,.79);
                cursor: default;
            }

            .blockstat3 {
                display: inline-block;
                width: 200px;
                height: 155px;
                position: absolute;
                top: 1300px;
                left: 1070px;
                background-color: #fff;
                margin-left: 3px;
                margin-right: 3px;
                margin-top: 50px;
                box-shadow: 13px 11px 5px -8px rgb(171 163 163 / 79%);
                -webkit-box-shadow: 13px 11px 5px -8px rgb(171 163 163 / 79%);
                -moz-box-shadow: 13px 11px 5px -8px rgba(171,163,163,.79);
                cursor: default;
            }

            .compteur {
                text-align: center;
                color: #707070;
                font-size: 39px;
                position: relative;
                margin-top: 30px;
            }

            .blockstat1 p {
                text-align: center;
                color: #707070;
                font-size: 19px;
                text-transform: uppercase;
                position: relative;
                margin-top: 15px;
                width: 100%;
            }

            .blockstat2 p {
                text-align: center;
                color: #707070;
                font-size: 19px;
                text-transform: uppercase;
                position: relative;
                margin-top: 15px;
                width: 100%;
            }

            .blockstat3 p {
                text-align: center;
                color: #707070;
                font-size: 19px;
                text-transform: uppercase;
                position: relative;
                margin-top: 15px;
                width: 100%;
            }
            .footer-dark {
                position: absolute;
                top: 1700px;
                width:100%;
                padding:50px 0;
                color:#f0f9ff;
                background-color:#282d32;
            }

            .footer-dark h3 {
                margin-top:0;
                margin-bottom:12px;
                font-weight:bold;
                font-size:16px;
            }

            .footer-dark ul {
                padding:0;
                list-style:none;
                line-height:1.6;
                font-size:14px;
                margin-bottom:0;
            }

            .footer-dark ul a {
                color:inherit;
                text-decoration:none;
                opacity:0.6;
            }

            .footer-dark ul a:hover {
                opacity:0.8;
            }

            @media (max-width:767px) {
                .footer-dark .item:not(.social) {
                    text-align:center;
                    padding-bottom:20px;
                }
            }

            .footer-dark .item.text {
                margin-bottom:36px;
            }

            @media (max-width:767px) {
                .footer-dark .item.text {
                    margin-bottom:0;
                }
            }

            .footer-dark .item.text p {
                opacity:0.6;
                margin-bottom:0;
            }

            .footer-dark .item.social {
                text-align:center;
            }

            @media (max-width:991px) {
                .footer-dark .item.social {
                    text-align:center;
                    margin-top:20px;
                }
            }

            .footer-dark .item.social > a {
                font-size:20px;
                width:36px;
                height:36px;
                line-height:36px;
                display:inline-block;
                text-align:center;
                border-radius:50%;
                box-shadow:0 0 0 1px rgba(255,255,255,0.4);
                margin:0 8px;
                color:#fff;
                opacity:0.75;
            }

            .footer-dark .item.social > a:hover {
                opacity:0.9;
            }

            .footer-dark .copyright {
                text-align:center;
                padding-top:24px;
                opacity:0.3;
                font-size:13px;
                margin-bottom:0;
            }
        </style>

        <script type="text/javascript"> /* Partie JavaScript du site */
            document.getElementById("espaceClient").onclick = function () {
                location.href = "panier.html"
            };
        </script>
    </body>
</html>