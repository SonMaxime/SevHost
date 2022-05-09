<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>SevHost - Hébergement haute gamme à bas prix.</title>
    </head>
    
    <header>
        <div class="logo"></div>
        <hr class="trait" noshade style="width:100%; height:2px; text-align:left;">
        <!--Importation de bootstrap et ionicons pour simplifier la réalisation du footer-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    </header>

    <body>
        <div class="menuAcceuil">
            <div class="titre">
                <a href="./../index.php"><img class="logoSevHost" src="./../assets/img/logo.png" alt="logoSevHost"></a>
                <a class="titresite" href="./../index.php">SevHost</a>
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
                    <li><a href="./../../offres/jeux/minecraft.php">Minecraft</a></li>
                    <li><a href="./../../offres/jeux/fivem.php">FiveM</a></li>
                    <li><a href="./../../offres/jeux/garry.php">Garry's Mod</a></li>
                </ul>
                </li>
                <li class="menu-deroulant-offres">
                <a href="#">VPS</a>
                <ul class="sous-menu">
                    <li><a href="./../../offres/vps/ssd.php">VPS SSD</a></li>
                    <li><a href="./../../offres/vps/nvme.php">VPS NVME</a></li>
                </ul>
                </li>
                <li><a href="./../../offres/discord.php">Discord</a></li>
                <li><a href="./../offres/vp.php">VPN</a></li>
            </ul>
        </nav>

        <div class="blockOffres">
            <h2 class="text-center mt-3">Offres disponibles</h2>
        </div>

        <table class="table-style">
            <thead>
                <tr>
                    <th>NOM</th>
                    <th>RAM</th>
                    <th>CONNEXION</th>
                    <th>STOCKAGE</th>
                    <th>PRIX</th>
                </tr>
            </thead>
        
            <tbody>
                <tr>
                    <td>Small</td>
                    <td>512MO</td>
                    <td>1Gbits</td>
                    <td>1Go SSD</td>
                    <td>0$</td>
                </tr>
                <tr>
                    <td>Medium</td>
                    <td>2Go</td>
                    <td>1Gbits</td>
                    <td>1Go SSD</td>
                    <td>1,5$</td>
                </tr>
                <tr>
                    <td>Big</td>
                    <td>4Go</td>
                    <td>10Gbits</td>
                    <td>2Go SSD</td>
                    <td>2,5$</td>
                </tr>
                <tr>
                    <td>Platinium</td>
                    <td>6Go</td>
                    <td>10Gbits</td>
                    <td>5Go SSD</td>
                    <td>5$</td>
                </tr>
            </tbody>
        </table>

        <div class="convice">
            <div class="convice1">
                <div class="convice-card-text">
                    <h3>Sauvegardes</h3>
                    <p>Nous effectuons régulièrement des sauvegardes vers différents sites afin d'avoir un maximum de redondance sur nos offres.</p>
                </div>
            </div>
            <div class="convice2">
                <div class="convice-card-text">
                    <h3>Serveurs basés en France</h3>
                    <p>Nous avons des serveurs basés en France afin de garantir la meilleure latence possible.</p>
                </div>
            </div>
            <div class="convice3">
                <div class="convice-card-text">
                    <h3>Serveurs</h3>
                    <p>Avec SevHost profitez de serveurs de grade datacenters afin de garantir un maximum de performances et fiabilité.</p>
                </div>
            </div>
            <div class="convice-right">
                <img src="./../assets/img/Serveur3.jpg" alt="" height="500px" width="500px">
            </div>
        </div>

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

            .trait {
                position: absolute;
                top: 60px;
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

            .blockOffres {
                position: absolute;
                top: 150px;
                left: 550px;
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
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                border-radius: 4px;
                position: absolute;
                top: 12px;
                left: 1150px;
                height: 50px;
            }

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
                top: 90px;
                left: 370px;
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
            *, ::before, ::after {
                box-sizing: border-box;
                margin: 0; 
                padding: 0;
            }

            .table-style  {
                position: absolute;
                top: 240px;
                left: 180px;
                border-collapse: collapse;
                box-shadow: 0 5px 50px rgba(0,0,0,0.15);
                cursor: pointer;
                margin: 0px auto;
                border: 2px solid midnightblue;
            }

            thead tr {
                background-color: midnightblue;
                color: #fff;
                text-align: left;
            }

            th, td {
                padding: 12px 60px;
                text-align: center;
            }

            tbody tr, td, th {
                border: 3px solid #ddd;
            }

            tbody tr:nth-child(even){
                background-color: #f3f3f3;
            }

            @media screen and (max-width: 550px) {
                body {
                    align-items: flex-start;
                }
                .table-style  {
                    width: 100%;
                    margin: 0px;
                    font-size: 10px;
                }
                th, td {
                    padding: 10px 7px;
                }
            }

            .convice1 {
                position: absolute;
                top: 600px;
                left: 130px;
                padding : 1em;
                width: 40%;
                height: 170px;
                box-sizing: border-box;
                background-image: linear-gradient(#E5E5E5, #CFCFCF);
                box-shadow: -1px 2px 5px 1px rgba(0, 0, 0, 0.7);                  
            }

            .convice2 {
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

            .convice3 {
                position: absolute;
                top: 1000px;
                left: 130px;
                padding : 1em;
                width: 40%;
                height: 170px;
                box-sizing: border-box;
                background-image: linear-gradient(#E5E5E5, #CFCFCF);
                box-shadow: -1px 2px 5px 1px rgba(0, 0, 0, 0.7);                  
            }

            .convice-right {
                position: absolute;
                top: 650px;
                left: 700px;
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

        <script type="text/javascript" src="./../basket.js"></script>
    </body>
</html>