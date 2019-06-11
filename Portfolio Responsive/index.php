<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Alexandre Costa - Portfolio</title>
        <link rel="shortcut icon" href="ressources/favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="style.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:300,400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Sanchez' rel='stylesheet' type='text/css'>
        <link href="bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/typed.js" type="text/javascript"></script>
    </head>


    <body style="background-color:#EFECEA">

         <div class="page-wrap">

            <?php include 'menu.php'; ?>

            <div id="extra-padding">

                    <div class="column-left">
                        <div id="bonjour-intro">
                            <h1 id="bonjour-title">Bonjour,</h1>
                            <p>Je m’appelle Alexandre Costa, je suis étudiant en mastère Stratégie Digitale à DC à Bordeaux.
                            Je suis passionné de voyages, d'art et de technologies. C'est de ces passions que je puise mon imagination pour mes projets.
                            N'hésitez pas à aller jetter un œil sur les projets que j'ai fait. D'autres sont en cour de réalisation.
                            </br></br>
                            J’ai plusieurs domaines d’expertises, tel que:
                            </br>
                            <span id="typed" style="white-space:pre;"></span>
                            </p>


                        </div>


                            <div id="typed-strings">
                                <p>le web-design</p>
                                <p>l'UX/UI et ergonomie</p>
                                <p>le community-management</p>
                                <p>le web-marketing et le SEO</p>
                                <p>l'entrepreneuriat</p>
                            </div>

                        <!-- <div id="kairos" class="project-thumb">
                            <div class="project-title">
                                <h3>KAIROS AGENCY •</h3>
                                <p>Refonte graphique d'une agence web Bordelaise</p>
                            </div>

                            <div>
                            </div>
                        </div> -->
                            <a style="text-decoration:none;">
                                <div class="project-card">
                                    <div id="winston" class="project-thumb">
                                    </div>
                                    <div id="winston-title" class="project-title">
                                        <h3>WINSTON •</h3>
                                        <h4 class="coming-soon">COMING SOON</h4>
                                        <p class="project-tag">UX - UI - Bootstrap - jQuery - PHP</p>
                                    </div>
                                </div>
                            </a>

                    </div> <!-- fermeture column-left -->

                        <div class="column-right">
                    <!--    <h1>Mes travaux les plus récents</h1> -->
                            <a href="pairor.php" style="text-decoration:none;">
                                 <div class="project-card  card-hover">
                                    <div id="pairor" class="project-thumb">

                                    </div>

                                    <div id="pairor-title" class="project-title">
                                        <h3>PAIR'OR •</h3>
                                        <p>Rendre à l'aviron ses lettres de noblesse dans le monde digital</p>
                                        <p class="project-tag">UX - UI</p>
                                    </div>
                                </div>
                            </a>

                            <a style="text-decoration:none;">
                                <div class="project-card">
                                    <div id="edgar" class="project-thumb">
                                    </div>

                                    <div id="edgar-title" class="project-title">
                                        <h3>EDGAR •</h3>
                                        <h4 class="coming-soon">COMING SOON</h4>
                                        <p class="project-tag">UX - UI - Bootstrap - jQuery - PHP</p>
                                    </div>
                                </div>
                            </a>
                        </div>


            </div> <!-- fermeture extra-padding -->

        </div> <!-- fermeture page-wrap -->

                <?php include 'footer.php'; ?>

    </body>

    <script>
            $(function(){

                $("#typed").typed({
                    // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
                    stringsElement: $('#typed-strings'),
                    typeSpeed: 30,
                    backDelay: 500,
                    loop: true,
                    contentType: 'text', // or text
                    // defaults to false for infinite loop
                    loopCount: true,
                    callback: function(){ foo(); },
                    resetCallback: function() { newTyped(); }
                });

                $(".reset").click(function(){
                    $("#typed").typed('reset');
                });

            });

            function newTyped(){ /* A new typed object */ }

            function foo(){ console.log("Callback"); }

    </script>

</html>

<!-- <p id="down-cv">Télécharger mon CV et</br>ma lettre de motivation</p> -->
