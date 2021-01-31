<?php 
    $messageenvoye = false;
    if( isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['sujet']) && !empty($_POST['sujet']) && isset($_POST['description']) && !empty($_POST['description'])){
        if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        
        $utilisateur = $_POST['nom'];
        $email = $_POST['email'];
        $sujet = $_POST['sujet'];
        $description = nl2br($_POST['description']);
    
        $monMail = "soyassine7@gmail.com";
        $body = "";
        $body.= "De : ".$utilisateur."\r\n";
        $body.= "Email : ".$email."\r\n";
        $body.= "Message : ".$description."\r\n";
    
        mail($monMail,$sujet,$body);
        $messageenvoye = true;
        }

    }
    else{
        $msg = "Tous les champs doivent être complétés !";
    }

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device_width, initial-scale=1.0">
    <title>Portfolio Yassine BOUCHDI</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#Accueil" class="menu-btn">Accueil</a></li>
                <li><a href="#Apropos" class="menu-btn">À propos</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#competences" class="menu-btn">Compétences</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- accueil ici -->
    <section class="Accueil" id="Accueil">
        <div class="max-width">
            <div class="Accueil-content">
                <div class="text-1">Bonjour, je m'appelle</div>
                <div class="text-2">Yassine BOUCHDI</div>
                <div class="text-3">Et je suis un <span class="typing"></span></div>
                <a href="#contact">Embauchez moi</a>
            </div>
        </div>
    </section>

    <!--  A propos commence -->
    <section class="Apropos" id="Apropos">
        <div class="max-width">
            <h2 class="titre">À propos de moi</h2>
            <div class="Apropos-content">
                <div class="column left">
                    <img src="images/YB.jpeg" alt="">
                </div>
                <div class="column right">
                    <div class="text">Je m'appelle Yassine et je suis un <span class="typing-2"></span></div>
                    <p>Actuellement étudiant en deuxième année de DUT informatique à Vélizy (78), je suis en recherche d'un stage qui me permettra d’allier enseignement théorique et formation pratique dans le cadre de la fin d'année du Dut informatique.
                        Après le DUT, j'aimerais intégrer une école d'ingénieurs en apprentissage.
                    </p>
                    <a href="CV_BOUCHDI_YASSINE.pdf" download="CV_BOUCHDI_YASSINE">Télécharger mon CV</a>
                </div>
            </div>
        </div>
    </section>

    <!--  services commence -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="titre">Mes services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Front-end </div>
                        <p>
                            Développer les interactions, les animations ainsi que le responsive design pour téléphone.
                        </p>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <i class="fas fa-cog fa-pulse"></i>
                        <div class="text">Back-end</div>
                        <p>
                            Mise en place de l’hébergement web, la gestion de bases de données et le développement de l'application.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-sync-alt fa-spin"></i>
                        <div class="text">Serveur</div>
                        <p>Installation, configuration, mise en place et administration du serveur web. </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!--     partie compétences-->

    <section class="competences" id="competences">
        <div class="max-width">
            <h2 class="titre">Mes compétences</h2>
            <div class="competences-content">
                <div class="column left">
                    <div class="text">Mes compétences et expériences.</div>
                    <p>Durant ma formation, j'ai acquis de nombreuses compétences et connaissances en informatique notamment en programmation en tant que développeur Front-End : HTML, CSS , Javascript, jQuery et Bootstrap. Et en tant que développeur Back-End
                        : PHP, et SQL. Ainsi qu'en administration des serveurs : serveurs Apache, Protocole HTTP, réseaux TCP/IP. <br></br>

                        <h4>Projets et expériences professionnelles :</h4>
                        <span id="suite">
                            <br></br>
                            <h4>• Création de ce Portfolio.</h4>
                            Langages utilisés :  HTML et CSS, Javascript. 
                            <br></br>
                            <h4>• Webmaster du site web E-commerce <a href=https://super-phone.fr>super-phone.fr</a>  avec API.</h4>
                            Langages utilisés :  Php, Javascript, HTML et CSS.
                            <br></br>
                            <h4>• Projet création d'un site web de jeux ( jeux : Deviner le chiffre)</h4>
                            Langages utilisés :  Php, Javascript, HTML et CSS.
                            <br></br>
                            <h4>• Projet création d'un site web informatif.</h4>
                            Langages utilisés :  HTML et CSS, Javascript.
 
                        </span>
                    </p>
                    <button type="button" id="read" onclick="read()">Lire la suite</button>
                    <script type="text/javascript">
                        var i = 0;

                        function read() {
                            if (!i) {
                                document.getElementById("suite").style.display = "inline";
                                document.getElementById("read").innerHTML = "Afficher moins";
                                i = 1;
                            } else {
                                document.getElementById("suite").style.display = "none";
                                document.getElementById("read").innerHTML = "Lire la suite";
                                i = 0;
                            }

                        };
                    </script>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML & CSS</span>
                            <span>90%</span>
                        </div>
                        <div class="ligne html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>60%</span>
                        </div>
                        <div class="ligne js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>70%</span>
                        </div>
                        <div class="ligne php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>SQL</span>
                            <span>85%</span>
                        </div>
                        <div class="ligne sql"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Apache</span>
                            <span>55%</span>
                        </div>
                        <div class="ligne apache"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--partie contact-->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="titre">Me contacter</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">N'hésitez pas à me contacter</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias consequuntur, ipsa enim officia itaque sint sed accusantium dolor rem voluptate.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Nom</div>
                                <div class="sub-title">BOUCHDI Yassine</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Adresse</div>
                                <div class="sub-title">09 allée des Rosiers, 92230 Gennevilliers</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">E-mail</div>
                                <div class="sub-title">bouchdi.yassine1@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">M'envoyer un message</div>
                    <form action="index.php" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="nom" placeholder="Nom" required value="<?php if( isset($_POST['nom']) ){ echo $_POST['nom']; }?>">
                            </div>
                            <div class="field email">
                                <input type="email" name="email" placeholder="E-mail" requiredvalue="<?php if( isset($_POST['email']) ){ echo $_POST['email']; }?>">
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" name="sujet" placeholder="Sujet" required value="<?php if( isset($_POST['sujet']) ){ echo $_POST['sujet']; }?>">
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" name="description" placeholder="Decription du projet.." required value="<?php if( isset($_POST['description']) ){ echo $_POST['description']; }?>"></textarea>
                        </div>
                        <div class="button">
                            <button type="submit">Envoyer</button>
                        </div>
                    </form>
                    <?php
                        if($messageenvoye):
                    ?>
                    <br></br>
                    <h3>Merci, je vous contacterai dans les plus brefs délais</h3>
                    <?php
                        if(isset($msg)){
                            echo $msg;
                        }
                    ?>
                    <?php elseif ($messageenvoye==true && isset($_POST['email']) ) : ?>
                        <h3>Une erreur est survenue</h3>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Partie footer -->
    <footer>
        <span>Créé par <a href="#">BOUCHDI Yassine</a> | <span class="far fa-copyright"></span> 2020 Tous droits réservés.</span>
    </footer>




    <script src="script.js"></script>
</body>

</html>