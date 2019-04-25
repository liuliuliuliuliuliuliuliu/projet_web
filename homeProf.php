<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quest For You!</title>
    <link rel="icon" type="image/ico" href="img/favicon.ico" />

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="homeProf.php">Espace Professeurs</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href=index.php>Deconnexion</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#profil">Bienvenue</a>
                    </li>
                 
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <a href="#/ajouter_questionnaire" class="btn btn-primary btn-xl page-scroll">+ ajouter un nouveau questionnaire</a>
                
            </div>
          <!--  <h3> Des questionnaires a corriger</h3>
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active">quiz1</button>
                <button type="button" class="list-group-item list-group-item-action">quiz2</button>
                <button type="button" class="list-group-item list-group-item-action">quiz3</button>
                <button type="button" class="list-group-item list-group-item-action">quiz4</button>
                
            </div>-->
        </div>

        
        
        <div class="header-content_1" style="display:none;padding-top:7%;width:50%;margin:0 auto">
        <form class="text-center border border-light p-5" method="post">

            <p class="h4 mb-4">Creation d'un questionnaire</p>

            
            <input type="text" name="QuestionnaireTitre" class="form-control mb-4"  placeholder="titre">
            <input type="mail" name="QuestionnaireMail" class="form-control mb-4"  placeholder="mail">
            <input type="text" name="QuestionnaireMatricule" class="form-control mb-4"  placeholder="matricule">
            

        
            
            <label>date ouverture </label>
            <input type="date" name="QuestionnaireDateOuverture" class="form-control mb-4" placeholder="Date de debut">
            <label>date fermeture </label>
            <input type="date" name="QuestionnaireDateFermeture" class="form-control mb-4" placeholder="Date de fin">
            
            
            <!-- Subject -->
            <select class="form-control mb-4" name="QuestionnaireEtat">
                <option value="" disabled selected>Choisir l'état</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
            <select class="form-control mb-4" name="QuestionnaireAcces">
                <option value="" disabled selected>Choisir le mode d'accés</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
            <select class="form-control mb-4" name="QuestionnaireModifiable">
                <option value="" disabled selected>Choisir si modifiable ou non</option>
                <option value="1">oui</option>
                <option value="2">non</option>
            </select>
            <select class="form-control mb-4" name="QuestionnaireSupprimable">
                <option value="" disabled selected>Choisir si supprimable ou non</option>
                <option value="1">oui</option>
                <option value="2">non</option>
            </select>
            <input type="temps" name="QuestionnaireTemps" class="form-control mb-4" placeholder="temps max">

            <div class="form-group">
                <textarea class="form-control rounded-0" name="QuestionnaireDescription" rows="3" placeholder="Description"></textarea>
            </div>

            

            <!-- Send button -->
            <input type="submit" class="btn btn-primary btn-xl page-scroll" onclick="location.href='homeProf.php?action=createQuestionnaire';"value="Ajouter" />
            <br>
            <br>
            <br>
            <br>
            <a href="#/ajouter_question" class="btn btn-primary btn-xl page-scroll">+ ajouter des questions</a>

            </form>    
                   
                        
        </div>
        <div class="header-content_3" style="display:none">
        <form class="text-center border border-light p-5" method="post">

            <h2>Creation des question</h2>

            
            
            <a href="#/ajouter_qcm" class="btn btn-primary btn-xl page-scroll">+ ajouter un QCM</a>
            <a href="#/ajouter_qcu" class="btn btn-primary btn-xl page-scroll">+ ajouter un QCU</a>
            <a href="#/ajouter_qrl" class="btn btn-primary btn-xl page-scroll">+ ajouter un QRL</a>

            
           
            
            

            
            
            
            

            </form>    
                   
                        
        </div>
        <div class="header-qcm" style="display:none;width:50%;margin:0 auto">
        <form class="text-center border border-light p-5" method="post">

            <p class="h4 mb-4">Creation d'un qcm</p>

            <input type="number" name="QuestionTime" class="form-control mb-4" placeholder="Temps Max">
        
            <input type="text" name="Question" class="form-control mb-4" placeholder="la Question">
            <input type="text" name="ReponseQCM1" class="form-control mb-4" placeholder="la reponse possible 1">
            <input type="text" name="ReponseQCM2" class="form-control mb-4" placeholder="la reponse possible 2">
            <input type="text" name="ReponseQCM3" class="form-control mb-4" placeholder="la reponse possible 3">
            <input type="text" name="ReponseQCM4" class="form-control mb-4" placeholder="la reponse possible 4">
            
            
            <input type="submit" class="btn btn-primary btn-xl page-scroll" onclick="location.href='homeProf.php?action=createQCM';"value="Ajouter la question" />
            
            

            </form>    
                   
                        
        </div>
        <div class="header-qrl" style="display:none;width:50%;margin:0 auto">
        <form class="text-center border border-light p-5" method="post">

            <p class="h4 mb-4">Creation d'un qrl</p>

            <input type="number" name="QuestionTime" class="form-control mb-4" placeholder="Temps Max">
        
            <input type="text" name="Question" class="form-control mb-4" placeholder="la Question">
            <input type="text" name="ReponseQRL" class="form-control mb-4" placeholder="la reponse possible ">
           
            
            
            <input type="submit" class="btn btn-primary btn-xl page-scroll" onclick="location.href='homeProf.php?action=createQRL';"value="Ajouter la question" />
            
            

            </form>    
                   
                        
        </div>
        <div class="header-qcu" style="display:none;width:50%;margin:0 auto">
        <form class="text-center border border-light p-5" method="post">

            <p class="h4 mb-4">Creation d'un qcu</p>

            <input type="number" name="QuestionTime" class="form-control mb-4" placeholder="Temps Max">
        
            <input type="text" name="Question" class="form-control mb-4" placeholder="la Question">
            <input type="text" name="ReponseQCU1" class="form-control mb-4" placeholder="la reponse possible 1">
            <input type="text" name="ReponseQCU2" class="form-control mb-4" placeholder="la reponse possible 2">
            <input type="text" name="ReponseQCU3" class="form-control mb-4" placeholder="la reponse possible 3">
            <input type="text" name="ReponseQCU4" class="form-control mb-4" placeholder="la reponse possible 4">
           
            
            
            <input type="submit" class="btn btn-primary btn-xl page-scroll" onclick="location.href='homeProf.php?action=createQCU';"value="Ajouter la question" />
            
            

            </form>    
                   
                        
        </div>
        


        
    </header>
                    <?php
                        $rootDirectoryPath = realpath(dirname(__FILE__));
                         define ('__ROOT_DIR', $rootDirectoryPath );

                         $base_url = explode('/',$_SERVER['PHP_SELF']);
                        array_pop($base_url);
                        define ('__BASE_URL', implode('/',$base_url) );

                        require_once(__ROOT_DIR . '/classes/AutoLoader.class.php');

                            $request = Request::getCurrentRequest();
                            $i=0;
                            try {
                                $controller = Dispatcher::dispatch($request);
                                $controller->execute();
                            } catch (Exception $e) {
                                echo 'Error : ' . $e->getMessage() . "\n";
                            }

                     ?>
                </div>
            </div>
        </div>
    </section>


    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Contactez nous!</h2>
                    <hr class="primary">
                    <p>Vous avez des questions ou des propositions? Contactez nous par mail ou sur notre numero dés que possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>+33 0769628406</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com">zhe.wang@etu.imt-lille-douai.fr</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

    
    <script>
    function Router() {
    this.routes = {};
    this.currentUrl = '';
    }
    Router.prototype.route = function(path, callback) {
        this.routes[path] = callback || function(){};
    };
    Router.prototype.refresh = function() {
        this.currentUrl = location.hash.slice(1) || '/';
        this.routes[this.currentUrl]();
    };
    Router.prototype.init = function() {
        window.addEventListener('load', this.refresh.bind(this), false);
        window.addEventListener('hashchange', this.refresh.bind(this), false);
    }
    window.Router = new Router();
    window.Router.init();
        
    
// change Page anything
    Router.route('/ajouter_questionnaire', function() {
        $(".header-content").hide();
        $(".header-content_1").show();
       
    });
   // Router.route('/voir_questionnaire', function() {
    //    $(".header-content").hide();
    //    $(".header-content_3").hide();
    //    $(".header-content-2").show();
        
    //});
    Router.route('/ajouter_question', function() {
        $(".header-content").hide();
       // $(".header-content-2").hide();
        $(".header-content_3").show();
        
        
    });
    Router.route('/ajouter_qcm', function() {
        $(".header-content").hide();
        $(".header-qcu").hide();
        $(".header-qrl").hide();
        $(".header-qcm").show();
        
    });
    Router.route('/ajouter_qcu', function() {
        $(".header-content").hide();
        $(".header-qcm").hide();
        $(".header-qrl").hide();
        $(".header-qcu").show();
        
    });
    Router.route('/ajouter_qrl', function() {
        $(".header-content").hide();
        $(".header-qcm").hide();
        $(".header-qcu").hide();
        $(".header-qrl").show();
        
    });
        </script>

</body>

</html>
