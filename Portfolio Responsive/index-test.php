<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Alexandre Costa - Portfolio</title>
        <link rel="stylesheet" href="style.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
        <link href="bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/typed.js" type="text/javascript"></script>
        
        
    <body>
        
        <div class="page-wrap">
            
            <?php include 'menu.php'; ?>

            <div class="container" id="extra-padding">
                <div class="row">
                    <div class="col-sm-6">
                        <div id="bonjour-intro">
                            <h1 id="bonjour-title">Bonjour,</h1>
                            <p>Je m’appelle Alexandre Costa, je suis étudiant en mastère Stratégie Digitale à Bordeaux.
                            </br></br>
                            J’ai plusieurs domaines d’expertises, qui sont:
                            </p>
                        </div>


                            <div id="typed-strings">
                                <p>le web-design</p>
                                <p>l'UX/UI et ergonomie</p>
                                <p>le community-management</p>
                                <p>le web-marketing et le SEO</p>
                                <p>l'entrepreneuriat</p>
                            </div>
                            <span id="typed" style="white-space:pre;"></span>
                    </div>

                    <div class="col-sm-6" id="right-side">
                        <p id="sos-alternance">Je suis actuellement à la recherche d’une alternance professionnelle</br>pour l’année 2016 - 2017.</p>
                        </br>
                        </br>
                        <p id="down-cv">Télécharger mon CV</br>et ma lettre de motivation</p>
                    </div>

                </div>
            </div>
        </div>

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