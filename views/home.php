<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <?php include(__DIR__ . '/head.inc.php'); ?>
    <link rel="stylesheet" href="../assets/css/home.min.css">
    <link rel="stylesheet" href="../assets/css/timeline.min.css">
</head>

<body>
    <div id="title" class="container-fluid p-5 text-center text-white">
        <div class="row">
            <div class="mx-auto">
                <section>
                    <h1 class="display-4">Thomas LAURE</h1>
                    <hr class="sm-separator w-25">
                    <h2>Développeur web - Symfony / Node.js / React.js</h2>
                    <h2>&</h2>
                    <h2>Apprenti ingénieur informatique au Conservatoire National des Arts et Métiers</h2>
                    <hr class="sm-separator w-25">
                </section>
                <div>
                    <button class="btn btn-light font-weight-bold mt-3" id="scroll-contact"><i class="fas fa-envelope-square"></i> ME CONTACTER</button>
                    <div class="row social">
                        <div class="ml-auto mr-3 mt-2">
                            <a href="https://twitter.com/laure_th" class="social-media twitter" role="button" title="Twitter"><i class="fab fa-twitter"></i></a>
                        </div>
                        <div class="mx-3 mt-2">
                            <a href="https://www.reddit.com/user/Merilthor" class="social-media reddit" role="button" title="Reddit"><i class="fab fa-reddit"></i></a>
                        </div>
                        <div class="mx-3 mt-2">
                            <a href="https://www.linkedin.com/in/thomas-laure-developpeur-web/" class="social-media linkedin" role="button" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="mr-auto ml-3 mt-2">
                            <a href="https://github.com/thlaure" class="social-media github" role="button" title="GitHub"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
                <div class="mt-md-5 row">
                    <div class="col-md-3 mt-2 mx-auto">
                        <button class="btn btn-light btn-block rounded-pill p-md-3 font-weight-bold" id="scroll-presentation" title="Scroll to the presentation">À propos</button>
                    </div>
                    <div class="col-md-3 mt-2 mx-auto">
                        <button class="btn btn-light btn-block rounded-pill p-md-3 font-weight-bold" id="scroll-timeline" title="Scroll to the timeline">Parcours</button>
                    </div>
                    <div class="col-md-3 mt-2 mx-auto">
                        <button class="btn btn-light btn-block rounded-pill p-md-3 font-weight-bold" id="scroll-skills" title="Scroll to the skills">Compétences</button>
                    </div>
                    <div class="col-md-3 mt-2 mx-auto">
                        <button class="btn btn-light btn-block rounded-pill p-md-3 font-weight-bold" id="scroll-realisations" title="Scroll to the realisations">Réalisations</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="container-fluid p-5" id="presentation">
        <blockquote class="blockquote text-center my-5">
            <p class="mb-0 text-monospace"><?= $citations[$index]->text ?></p>
            <?php if ($citations[$index]->from) : ?>
                <footer class="blockquote-footer"><?= $citations[$index]->from ?></footer>
            <?php endif ?>
        </blockquote>
        <h1 class="text-center">À propos</h1>
        <div class="row mt-5">
            <div class="col-md-2 center mt-3">
                <img class="rounded shadowing w-100" src="../assets/images/portrait.jpg" width="100" alt="Portrait">
            </div>
            <article class="col-md-6 mt-3">
                <h2>Thomas LAURE, <span id="age"></span> ans</h2>
                <h3>Développeur web front-end et back-end en région Toulonnaise</h3>
                <p>Je suis diplômé d'un <a href="https://bts-sio.lyc-bonaparte.fr/">BTS SIO</a> option SLAM actuellement <a href="https://www.cnam-paca.fr/nos-formations/ingenieur-specialite-informatique-multimedia">apprenti ingénieur informatique</a> au sein du Conservatoire National des Arts et Métiers à l'<a href="http://www.univ-tln.fr/">Université de Toulon</a> au poste de développeur web full-stack et Python à <a href="https://www.coexel.com/">Coexel</a>.</p>
                <p>Je suis également membre du collectif <a href="https://weact4earth.fr/">We Act 4 Earth</a> !</p>
                <p>En milieu professionnel, hormis le développement, les activités qui me passionnent le plus sont :</p>
                <ul>
                    <li>La gestion de projet suivant les méthodes Agiles, en particulier Scrum et Kanban, pour le côté organisation et la transparence</li>
                    <li>L'application de démarches UX pour proposer aux utilisateurs une solution au plus proche de leurs besoins</li>
                    <li>L'analyse et la conception logicielle pour réfléchir à la mise en place des fonctionnalités en vue d'obtenir une solution maintenable et extensible dans le temps</li>
                    <li>L'analyse, la mise en forme, le traitement et l'extraction de grands volumes de données</li>
                    <li>La méthodologie DevOps</li>
                    <li>L'écoconception web que j'utilise dans mes développements</li>
                </ul>
                <p>Pour toute question, n'hésitez pas à me contacter !</p>
            </article>
            <article class="col-md-2 mt-3">
                <h3>Centres d'intérêt</h3>
                <ul class="list-unstyled">
                    <li><i class="fas fa-code"></i> Développement</li>
                    <li><i class="fas fa-desktop"></i> Informatique</li>
                    <li><i class="fas fa-microchip"></i> Hardware</li>
                    <li><i class="fas fa-film"></i> Cinéma / Séries TV</li>
                    <li><i class="fas fa-camera"></i> Photographie</li>
                    <li><i class="fas fa-gamepad"></i> Jeux vidéo</li>
                    <li><i class="fas fa-music"></i> Musique</li>
                    <li><i class="fas fa-book"></i> Littérature / Philosophie</li>
                    <li><i class="fas fa-hiking"></i> Voyages / Randonnées</li>
                    <li><i class="fas fa-motorcycle"></i> Moto</li>
                    <li><i class="fas fa-futbol"></i> Sport</li>
                    <li><i class="fas fa-smile"></i> Développement personnel</li>
                </ul>
            </article>
            <article class="col-md-2 mt-3">
                <h3>Soft skills</h3>
                <ul class="list-unstyled">
                    <li><i class="fas fa-id-badge"></i> Permis B / A2 et véhiculé</li>
                    <li><i class="fas fa-user-clock"></i> Ponctualité</li>
                    <li><i class="fas fa-tools"></i> Créativité</li>
                    <li><i class="fas fa-running"></i> Réactivité</li>
                    <li><i class="fas fa-user-ninja"></i> Rigueur / Flexibilité</li>
                    <li><i class="fas fa-eye"></i> Curiosité professionnelle</li>
                    <li><i class="fas fa-info"></i> Veille technologique</li>
                    <li><i class="fas fa-leaf"></i> Green IT / Ecoconception</li>
                    <li><i class="fas fa-tasks"></i> Organisation / Gestion</li>
                    <li><i class="fas fa-language"></i> TOEIC : 615 points</li>
                    <li><img src="../assets/images/logo_voltaire.png" alt="Volaire"> Certificat Voltaire : <a href="https://www.certificat-voltaire.fr/orthographe-recruteur">771 points</a></li>
                </ul>
            </article>
        </div>
        <div class="mt-5 text-center">
            <a href="../assets/docs/cv_thomas_laure.pdf" class="button animated-corners font-weight-bold p-4"><i class="fas fa-file-download"></i> Télécharger mon CV</a>
        </div>
    </section>

    <div id="timeline">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <ul class="timeline">
                        <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <h4 class="h5 mb-0">Bénévole pour We Act 4 Earth</h4><span class="small text-gray"><i class="far fa-clock"></i> Février 2021 - Aujourd'hui</span>
                            <p class="text-small mt-2 font-weight-light">We Act 4 Earth est un collectif qui accompagne les entrepreneur.e.s sur le chemin de la transition écologique.</p>
                            <p class="text-small mt-2 font-weight-light">Nous proposons un grand nombre de ressources et de formations pour aider les entrepreneur.e.s à sauter le pas.</p>
                            <p class="text-small mt-2 font-weight-light">Du numérique responsable aux éco-gestes en entreprise, plus de 45 bénévoles du collectif ont travaillé pendant plusieurs mois à la création d'une plateforme en ligne aux sujets variés, ludiques et pédagogiques.</p>
                            <div>
                                <img src="../assets/images/BadgeWA4E.png" width="100" alt="WA4E badge">
                            </div>
                        </li>
                        <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <h4 class="h5 mb-0">Ecole d'ingénieur du Cnam</h4><span class="small text-gray"><i class="far fa-clock"></i> Septembre 2018 - Août 2021</span>
                            <p class="text-small mt-2 font-weight-light">Cursus ingénieur informatique au Cnam à <a href="https://www.coexel.com/">Coexel</a> société éditrice de MyTwip, solution de veille technologique et stratégique tous secteurs, en tant que développeur web full-stack Node.js, PHP et Python.</p>
                            <p class="text-small mt-2 font-weight-light">Participation à la vie étudiante en tant que délégué de la promotion et membre du Bureau Des Etudiants.</p>
                            <ul>
                                <li class="text-small font-weight-light">Développement d'un web scraper basé sur les technologies Node.js, <a href="http://expressjs.com/">Express</a> et <a href="https://developers.google.com/web/tools/puppeteer/">Puppeteer</a></li>
                                <li class="text-small font-weight-light">Participation au développement d'interfaces client</li>
                                <li class="text-small font-weight-light">Développement de modules complémentaires PHP, JavaScript et Python à la solution MyTwip</li>
                                <li class="text-small font-weight-light">Extraction et mise en forme de données de plusieurs supports (CSV, base de données, XML) dans les langages PHP, JavaScript et Python</li>
                                <li class="text-small font-weight-light">Projet de mise en place d'algorithme semi-automatisé permettant d'extraire des actualités depuis des sites</li>
                                <li class="text-small font-weight-light">Mise en place de la charte RSE de l'entreprise (Responsabilité Sociétale des Entreprises)</li>
                            </ul>
                        </li>
                        <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <h4 class="h5 mb-0">Développeur Symfony freelance</h4><span class="small text-gray"><i class="far fa-clock"></i> Juillet 2018 - Novembre 2018</span>
                            <p class="text-small mt-2 font-weight-light">Participation au développement d'un site e-commerce de balles de golf personnalisables pour RM Concept.</p>
                            <ul>
                                <li class="text-small font-weight-light">Assistance à maîtrise d'ouvrage dans la rédaction du cahier des charges</li>
                                <li class="text-small font-weight-light">Conception et mise en place de la base de données MySQL</li>
                                <li class="text-small font-weight-light">Développement d'une interface d'administration permettant de gérer les produits, les clients et les factures</li>
                                <li class="text-small font-weight-light">Développement de l'interface client</li>
                                <li class="text-small font-weight-light">Création d'une page de création de compte et de connexion (de manière sécurisée) ainsi qu'une interface permettant au client de suivre ses commandes</li>
                                <li class="text-small font-weight-light">Développement du module permettant la personnalisation des balles</li>
                                <li class="text-small font-weight-light">Réunions régulières avec le collaborateur pour présenter les livrables et redéfinir les fonctionalités au besoin</li>
                            </ul>
                            <p class="text-small mt-2 font-weight-light">Le site est actuellement déployé.</p>
                        </li>
                        <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <h4 class="h5 mb-0">BTS SIO option SLAM</h4><span class="small text-gray"><i class="far fa-clock"></i> Septembre 2016 - Juin 2018</span>
                            <p class="text-small mt-2 font-weight-light">Obtention du <a href="https://bts-sio.lyc-bonaparte.fr/">BTS SIO option SLAM</a> du <a href="http://www.lyc-bonaparte.fr/">lycée Bonaparte</a> de Toulon - <a href="https://www.cyberedu.fr/pages/label-2019-001/">Label CyberEdu</a></p>
                            <p class="text-small mt-2 font-weight-light">2 stages de 6 semaines à la CPAM du Var de Toulon en tant que développeur Java EE et web.</p>
                            <ul>
                                <li class="text-small font-weight-light">Stage de 2ème année à la CPAM du Var (6 semaines) : Conception de la base de données du projet, et participation au développement d'une application web Java EE et d'une application JavaScript qui ont pour but d'aider les professionnels de santé à trouver un bassin d'installation et de les inviter à s'installer dans les endroits où ils sont peu présents.</li>
                                <li class="text-small font-weight-light">Stage de 1ère année à la CPAM du Var (6 semaines) : Participation au développement d'une application web Java EE permettant de recenser au service comptable les cas de mobilités bancaires chez les assurés.</li>
                            </ul>
                            <p class="text-small mt-2 font-weight-light">Les 2 projets sont actuellement en production.</p>
                        </li>
                        <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <h4 class="h5 mb-0">1 an à l'Université</h4><span class="small text-gray"><i class="far fa-clock"></i> Septembre 2015 - Avril 2016</span>
                            <p class="text-small mt-2 font-weight-light">Premier semestre en DUT Génie Mécanique et Productique à l'Université de Toulon, mais bien qu'intéressante la formation ne me correspondait pas, je me suis réorienté au second semestre en licence Sciences pour l'Ingénieur dans le but de préparer mon entrée en BTS SIO.</p>
                            <p class="text-small mt-2 font-weight-light">Compétences acquises : dessin industriel, modélisation 3D, métrologie, tournage et fraisage</p>
                        </li>
                        <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <h4 class="h5 mb-0">Bac S option SI</h4><span class="small text-gray"><i class="far fa-clock"></i> Septembre 2012 - Juin 2015</span>
                            <p class="text-small mt-2 font-weight-light">Obtention du Baccalauréat Scientifique option Sciences de l'Ingénieur au lycée Costebelle à Hyères.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section id="skills" class="container-fluid p-5">
        <h1 class="text-center">Compétences</h1>
        <article class="row mt-5">
            <div class="col-md-4">
                <h2 class="text-center mt-3">Environnements</h2>
                <ul class="mt-5">
                    <li class="lead"><i class="devicon-visualstudio-plain"></i> VS Code</li>
                    <li class="lead"><i class="devicon-phpstorm-plain"></i> PhpStorm</li>
                    <li class="lead"><i class="devicon-linux-plain"></i> GNU/Linux</li>
                    <li class="lead"><i class="devicon-windows8-original"></i> Windows</li>
                    <li class="lead"><i class="devicon-python-plain"></i> Anaconda</li>
                    <li class="lead"><i class="devicon-git-plain"></i> Git</li>
                    <li class="lead"><i class="devicon-mysql-plain"></i> MySQL / MariaDB</li>
                    <li class="lead"><i class="devicon-postgresql-plain"></i> PostgreSQL / PostGIS</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h2 class="text-center mt-3">Principales</h2>
                <ul class="mt-5">
                    <li class="lead"><i class="devicon-html5-plain"></i> HTML</li>
                    <li class="lead"><i class="devicon-css3-plain"></i> CSS / Bootstrap</li>
                    <li class="lead"><i class="devicon-javascript-plain"></i> JavaScript / jQuery</li>
                    <li class="lead"><i class="devicon-php-plain"></i> PHP</li>
                    <li class="lead"><i class="devicon-symfony-original"></i> Symfony / Twig</li>
                    <li class="lead"><i class="devicon-nodejs-plain"></i> Node.js</li>
                    <li class="lead"><i class="devicon-express-original"></i> Express</li>
                    <li class="lead"><i class="devicon-react-original"></i> React.js</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h2 class="text-center mt-3">Autres</h2>
                <ul class="mt-5">
                    <li class="lead"><i class="devicon-python-plain"></i> Python / Selenium</li>
                    <li class="lead"><i class="devicon-java-plain"></i> Java / Java EE</li>
                    <li class="lead"><i class="devicon-csharp-plain"></i> C# / .Net</li>
                    <li class="lead"><i class="devicon-amazonwebservices-original"></i> Big Data / Small Data</li>
                    <li class="lead"><i class="devicon-drupal-plain"></i> E-commerce</li>
                    <li class="lead"><i class="devicon-photoshop-plain"></i> Adobe Photoshop</li>
                    <li class="lead"><i class="devicon-trello-plain"></i> Agilité / UX Design / Design Thinking</li>
                </ul>
            </div>
        </article>
    </section>

    <section id="realisations" class="container-fluid p-5 text-white">
        <h1 class="text-center">Réalisations</h1>
        <div class="row mt-5">
            <?php for ($i = 0; $i < count($projects); ++$i) : ?>
                <a href="/projects/<?= $projects[$i]->slug ?>" class="card col-md-2 text-secondary mx-3 unstyled shadowing mb-4 p-0" style="width: 18rem;">
                    <img src="../assets/images/<?= $projects[$i]->files->cover ?>" class="card-img-top" width="400" alt="Image of the project <?= $projects[$i]->title ?>">
                    <div class="card-body">
                        <p class="card-title h5"><?= $projects[$i]->title ?></p>
                        <p class="font-italic"><?= $projects[$i]->tag ?></p>
                    </div>
                </a>
            <?php endfor ?>
        </div>

        <div class="mt-5 text-center">
            <button class="btn btn-light rounded-pill p-3" id="scroll-title" title="Scroll to the title"><i class="fas fa-arrow-up"></i></button>
        </div>
    </section>

    <section id="contact" class="container-fluid p-5">
        <h1 class="text-center">Me contacter</h1>
        <div id="contact-form" class="mt-5">
            <form class="container shadowing p-3 bg-dark-smoke text-light rounded">
                <div id="alert-contact" class="" role="alert"></div>
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Votre nom</label>
                            <input type="text" id="name" name="name" class="form-control" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="firstname">Votre prénom</label>
                            <input type="text" id="firstname" name="firstname" class="form-control" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Votre email</label>
                            <input type="email" id="email" name="email" class="form-control" value="" required>
                        </div>
                        <small class="mx-auto form-text text-light">Aucune information ne sera pas partagée</small>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="message">Votre message</label>
                            <textarea class="form-control" id="message" name="message" rows="8" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-light" id="send-mail"><i class="fas fa-paper-plane" aria-hidden="true"></i> Envoyer</button>
                </div>
            </form>
        </div>
    </section>
    <?php include(__DIR__ . '/footer.inc.php'); ?>
    <script src="../assets/js/home.min.js"></script>
    <script src="../assets/js/contact.min.js"></script>
</body>

</html>