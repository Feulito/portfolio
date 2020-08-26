<!DOCTYPE html>
<html>
    <head>
        <title>Sébastien Duterte - Portfolio</title>
        <meta charset="utf-8">
        <meta name="Portfolio de DuterteSébastien">
        <meta name="viewport" content="width=device-width, height=device-width, initial-scale=1.0">

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="bootstrap-4.5.1-dist/css/bootstrap.min.css">
        <script src="bootstrap-4.5.1-dist/js/bootstrap.min.js"></script>

        <link href="css/animation.css" rel="stylesheet">
        <link href="css/portfolio.css" rel="stylesheet">
        <script src="js/projects.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-md nav-dark">
            <!-- Titre -->
            <div class="col-lg-3">
                <a class="navbar-brand" href="#">Portfolio</a>
            </div>
            
            <!-- Liens -->
            <div class="col-lg-6 col-md-3 text-md-center text-lg-center text-right">
                <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="#real">Réalisations</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="projects/CVSebastienDuterte.pdf" target="_blank">Curruculum Vitae</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                </div>
            </div>

            <!-- Bouton d'expention pour les smartphones -->
            <div class="col-lg-3 text-right">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-12 projet">
                        <h2><a href="#adeclarer" download>A déclarer</a></h2>
                        <p>
                            A déclarer est un logiciel permettant aux artisans de déclarer plus facilement leur revenus.
                            Il suffit d'entrer ses revenus dans le logiciel et les charges ainsi que le total seront calculés
                            automatiquement. Lors de la sauvegarde, un fichier CSV est généré avec tous les
                            revenus, les charges et le total. Le logiciel se veut pratique, léger et facile d'utilisation.
                        </p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 projet">
                    <h2><a href="#lehub" download>Le Hub</a></h2>
                    <p>Le hub est une application Web dévelopée sous Angular 4. Il a pour but de relier facilement et rapidement
                        les freelances avec les entreprises. Chaque entreprise peut proposer des missions, auxquels les freelances
                        répondront par une offre. L'entreprise choisira ainsi le profil qui lui conviendra le plus dans les offres qu'elle
                        a reçu.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 projet">
                    <h2><a href="#laby" download>Jeu du Labyrinthe</a></h2>
                    <p>Ce jeu a été réalisé en équipe dans le cadre d'un projet universitaire. Il est développé en Java avec le framework JavaFX.
                        Chaque joueur a un pion et des cartes représentant des trésors. C'est un jeu à quatre joueur et le but est de trouver
                        tous les trésors représentés sur ses cartes dans le plateau du jeu.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 projet">
                    <h2><a href="#projetweb" download>Siam</a></h2>
                    <p>
                        Le jeu Siam est un jeu de plateau à deux joueurs au tout par tour. Chaque joueur possède des pions,
                        rhinocéros ou éléphant. Chaque camp doit glisser les rochets sur le plateau hors de la map pour gagner.
                        Dès qu'un rocher est éjécté le joueur le plus proche du rocher gagne.
                        Le jeu est disponnible sur navigateur avec un accès membre pour jouer. Il est possible de disputer plusieurs parties
                        en même temps.
                        Le tout est développé en Javascript et PHP.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-12 projet">
                    <h2><a href="#junglewar">Jungle War</a></h2>
                    <p>Jungle war est un jeu disponible sur Google Play. Il consiste à protéger le coeur d'une jugnle, représentée
                        par une boule verte. Pour cela, il faut tuer les mouches, et autres petites bêtes qui attaquent le coeur.
                        Une fois que le coeur n'a plus de vie, la partie est terminée et le score s'affiche.
                        Le jeu est sujet à plusieurs mises à jours qui ajoutent plus de bêtes, incluant une monnaie virtuelle permettant
                        de débloquer des améliorations.
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 projet">
                    <h2><a href="">Ce portfolio</a></h2>
                    <p>
                        J'ai crée ce portfolio pour vous permettre de voir et de tester les projets que j'ai déjà réalisé.
                        Il est développé avec uniquement le framework front-end Bootsrap. Les animations sont réalisées en CSS et
                        avec JavaScript sans framework.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 projet">
                    <h2><a href="documents/CVSebastienDuterte.pdf" target="_blank">CV</a></h2>
                    <p>
                        Voici mon Curruculum Vitae que vous pouvez ouvrir en format PDF et éventuellement télécharger.
                        Je recherche activement une alternance durant pour Master Ingénierie Logicielle pour l'Internet afin
                        d'accumuler de l'experience, et faciliter mon intégration dans la vie active après le Master.
                        Je suis interessé par le développement Web, sous Angular, Symfony ou tout autre framework (c'est un plaisir
                        d'apprendre), ou le développement mobile.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 projet">
                    <h2><a href="https://github.com/Feulito?tab=repositories" target="_blank">Git</a></h2>
                    <p>
                        Vous trouverez le code de tous mes projets sur ce Github. Vous pourrez également
                        télécharger les projets, et les tester, directement en cliquant sur leur nom ou
                        en défilant la page pour cliquer sur le lien de téléchargement.
                        Toute critique est bonne à prendre, ainsi je vous invite à me contacter pour me
                        faire part de vos retours.
                    </p>
                </div>
            </div>

            <div class="row pres">
                <div class="col-lg-12 presentation" id="adeclarer">
                    <h1 class="text-lg-right">A déclarer</h1>
                    <div class="container-fluid">
                        <div class="row justify-content-right">
                            <a href="img/adeclarer.png" class="col-lg-6"><img src="img/adeclarer.png" alt="Image de présentation du logiciel A déclarer" class="col-lg-12" /></a>
                            <p class="col-lg-6">
                                A déclarer est un logiciel permettant aux artisans de déclarer plus facilement leur revenus.
                                Il suffit d'entrer ses revenus dans le logiciel et les charges ainsi que le total seront calculés
                                automatiquement. Lors de la sauvegarde, un fichier CSV est généré avec tous les
                                revenus, les charges et le total. Le logiciel se veut pratique, léger et facile d'utilisation.
                                <br><br>
                                Les erreurs sonts automatiquement gérées, par exemple il n'est pas possible d'entrer une date fausse.
                                A déclarer vérifie que toutes les informations que vous entrez sont correctes, ainsi il n'accepte pas
                                de moyens de paiment autre que l'espece et le chèque.
                                <br><br>
                                Plus besoin ainsi de passer par un tableur qui ne fera aucune vérification. Nul besoin de savoir utiliser les
                                formules des tableurs pour calculer ses charges, tout est fait automatiquement à chaque entrée.
                                Le logiciel est développé sous Java avec le framework JavaFX.
                            </p>
                        </div>
                        <div class="row justify-content-center">
                            <a href="https://github.com/Feulito/A_Declarer/releases/download/1.0/ADeclarer.rar" class="download" download>Télécharger A Déclarer</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 presentation" id="lehub">
                    <h1 class="text-lg-left">Le Hub</h1>
                    <div class="container-fluid">
                        <div class="row justify-content-left">
                            <p class="col-lg-6">
                                Le hub est une application Web dévelopée sous Angular 4. Il a pour but de relier facilement et rapidement
                                les freelances avec les entreprises. Chaque entreprise peut proposer des missions, auxquels les freelances
                                répondront par une offre. L'entreprise choisira ainsi le profil qui lui conviendra le plus dans les offres qu'elle
                                a reçu.
                                <br><br>
                                L'avantage de cette application c'est qu'une entreprise n'a pas besoin de chercher
                                elle même les freelances. Elle a juste à déposer une annonce détaillée, et les freelances
                                se proposeront. Elle pourra alors choisir l'offre ou le profil qui lui convient le mieux.
                                <br><br>
                                De l'autre côté, le freelance pourra candidater à des annonces sans devoir payer, et uniquement
                                aux annonces qui l'interessent et dont il a les compétences requises.
                                <br>
                                L'application contient une base de donnée document FireBase. Les entreprises et les freelances sont deux
                                entitées différentes : On ne peut pas s'authentifier comme entreprise et freelance en même temps.
                            </p>
                            <a href="img/lehub.png" class="col-lg-6"><img src="img/lehub.png" alt="Image de présentation du site web Le Hub" class="col-lg-12" /></a>
                        </div>
                        <div class="row justify-content-center">
                            <a href="https://github.com/Feulito/LeHub" class="download" download>Voir Le Hub sur GitHub</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 presentation" id="laby">
                    <h1 class="text-lg-right">Le Labyrinthe</h1>
                    <div class="container-fluid">
                        <div class="row justify-content-right">
                            <a href="img/labyrinthe.png" class="col-lg-6"><img src="img/labyrinthe.png" alt="Image de présentation du jeu du Labyrinthe" class="col-lg-12" /></a>
                            <p class="col-lg-6">
                                Ce jeu a été réalisé en équipe dans le cadre d'un projet universitaire. 
                                Il est développé en Java avec le framework JavaFX.
                                Chaque joueur a un pion et des cartes représentant des trésors.
                                C'est un jeu à quatre joueur et le but est de trouver
                                tous les trésors représentés sur ses cartes dans le plateau du jeu.
                                <br><br>
                                Toutes les cartes sont divisées entre les quatres joueurs, et chaque joueur
                                doit retrouver tous les trésors et revenir à sa position de déprt pour gagner
                                la partie.
                                Il y a certains trésors qui sont vivants et qui, par conséquent, se déplacent
                                seuls sur le plateau.<br>
                                Le plateau est composée de cartes, plus une qui est mise sur le côté. Cette dernière
                                peut être utilisée pour faire glisser une ligne ou une colonne du plateau afin de
                                changer sa disposition à son avantage.
                                <br><br>
                                Nous étions cinq élèves sur le projets.
                                Je me suis occupé de la classe des joueurs et de la conception objet selon le
                                patron de conception Factory. Melvin Beaussart s'est occupé de la partie Intelligence
                                Artificielle avec mon aide pour pouvoir jouer contre des ordinateurs de difficultés différentes.
                                Mathilde Pellois s'est occupée des trésors et des images. Alexis Salveti s'est occupé de
                                l'intégration de JavaFX et des cartes, pendant qu'Arthus Marzinkowski s'est occupé de la
                                résolution des bugs, et a aidé un peu sur toutes les classes du projet.
                                <br><br>
                                Nous avons fait deux thèmes pour le jeu, un normal et un thème océan qui change la couleur
                                de la carte. Il est possible de rajouter facilement d'autre thème.
                            </p>
                        </div>
                        <div class="row justify-content-center">
                            <a href="https://github.com/Feulito/Labyrinthe/releases/download/1.0/Labyrinthe.rar" class="download" download="">Télécharger Le Labyrinthe</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 presentation" id="proweb">
                    <h1 class="text-lg-left">Siam</h1>
                    <div class="container-fluid">
                        <div class="row justify-content-left">
                            <p class="col-lg-6">
                                Le jeu Siam est un jeu de plateau à deux joueurs au tout par tour. Chaque joueur possède des pions,
                            rhinocéros ou éléphant. Chaque camp doit glisser les rochets sur le plateau hors de la map pour gagner.
                            Dès qu'un rocher est éjécté le joueur le plus proche du rocher gagne.
                            Le jeu est disponnible sur navigateur avec un accès membre pour jouer. Il est possible de disputer plusieurs parties
                            en même temps.
                            Le tout est développé en Javascript et PHP.
                            <br><br>
                            Il faut obligatoirement deux joueurs dans une partie pour commencer à jouer. Il est possible
                            d'observer les parties qui ont déjà débuté.
                            Lorsque c'est à notre tour de jouer, la partie est entourée d'une bordure verte.
                            <br><br>
                            L'éléphant commence la partie. En début de tour on peut déplacer un pion, ou modifier son orientation.
                            On peut également faire entrer un pion dans le plateau.
                            Une fois le déplacement effectué, c'est au tour de l'adversaire.
                            <br><br>
                            Pour gagner, il faut déplacer un rocher hors du plateau. Ainsi, il faut obligatoirement que le pion poussant le
                            rocher soit orienté vers ce dernier. Aussi, il est possible d'empêcher le déplacement d'un rocher en placant un pion derrière lui.
                            Ainsi, il est possible de pousser un rocher avec plusieurs pions : Deux éléphants poussant un rocher contre un Rhinoceros, le déplacement
                            s'effectue. Mais si deux éléphants poussent un rocher face à deux Rhinoceros alors le déplacement ne se fait pas car
                            la poussée est de force égale des deux côtés du rocher.
                            </p>
                            <a href="img/siam.png" class="col-lg-6"><img src="img/siam.png" alt="Image de présentation du jeu du projet web" class="col-lg-12" /></a>
                        </div>
                        <div class="row justify-content-center">
                            <a href="https://github.com/Feulito/Siam" class="download" download>Voir Siam sur GitHub</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 presentation" id="junglewar">
                    <h1 class="text-lg-right">Jungle War</h1>
                    <div class="container-fluid">
                        <div class="row justify-content-right">
                            <a href="https://lh3.googleusercontent.com/FBSS37WTO6ho88ZwPCVz6NVmKoQbyoAfk8Wrf49FtZvYnZ0gvoyM8G5xPBLSxfEfvVc=w1360-h625-rw" class="col-lg-6"><img src="https://lh3.googleusercontent.com/FBSS37WTO6ho88ZwPCVz6NVmKoQbyoAfk8Wrf49FtZvYnZ0gvoyM8G5xPBLSxfEfvVc=w1360-h625-rw" alt="Image de présentation du jeu Jungle War" class="col-lg-12" /></a>
                            <p class="col-lg-6">
                                Jungle war est un jeu disponible sur Google Play. Il consiste à protéger le coeur d'une jungle, représentée
                            par une boule verte. Pour cela, il faut tuer les mouches, et autres petites bêtes qui attaquent le coeur.
                            Une fois que le coeur n'a plus de vie, la partie est terminée et le score s'affiche.
                            Le jeu est sujet à plusieurs mises à jours qui ajoutent plus de bêtes, incluant une monnaie virtuelle permettant
                            de débloquer des améliorations.
                            <br><br>
                            Il est développé sous Unity en C#. Des annonces y sont intégrées pour générer des revenus.
                            <br>
                            Les musiques et toutes les images ont été faites par mes soins.
                            </p>
                        </div>
                        <div class="row justify-content-center">
                            <a href="https://play.google.com/store/apps/details?id=com.FCodeCompany.JungleWar&gl=FR" class="download">Télécharger Jungle War</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container-fluid"></div>
                <div class="row justify-content-center" id="contact">
                        
                    <div class="col-lg-5 col-md-6 text-md-left col-sm-12 text-center">
                        <h2>Réseaux</h2>
                        <div>
                            <a href="https://www.facebook.com/sebadute/"><img src="img/Facebook_icon.png" alt="Logo de facebook"></a>
                            <a href="https://www.linkedin.com/in/s%C3%A9bastien-duterte-b20660195/"><img src="img/LinkedIn_logo_initials.png" alt="Logo de Linkedin"></a>
                        </div>
                        </div>
                        <div class="col-lg-5 col-md-6 text-md-right col-sm-12 text-center">
                            <h2>Contact</h2>
                            <div>
                                <p>Mail : <a href='mailto:sebastienduterte@hotmail.fr'>sebastienduterte@hotmail.fr</a></p>
                                <p>Tel : 06.19.38.80.30</p>
                            </div>
                        </div>
                </div>
            </div>
        </footer>
    </body>
</html>