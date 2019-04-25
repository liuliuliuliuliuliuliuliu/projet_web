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
    <link href="style5.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/vue.js"></script>
    <script src="js/vue-router.js"></script>  

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
                <a class="navbar-brand page-scroll" href="index.php">QUEST FOR YOU!</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="index.php" id="de_connecter" style="display:none">Deconnecter</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <div class="header-content">
           <div class="header-content-inner">
                <div id="header">
                    
                    <div id="app">  
            <!-- 这个标签必须有，可视化路由 -->
                    <transition mode='out-in'>
                        <router-view></router-view>                          
                    </transition>
                    </div>
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
                        } 
                        catch (Exception $e) {
                                echo 'Error : ' . $e->getMessage() . "\n";
                        }
                    ?> 
                </div> 
            </div>
        </div>
    </header>


    <section class="bg-primary" id="about" style="padding:0px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
    
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


    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>
    <script>
        var welcome = {
            template:'<div class="header_mid"><div class="header_mid_content"><div class="bienvenu">Bienvenue</div><hr><div class="introduction">Recommander Google Chrome</div><div class="commencer"><a href="#/login" style="text-decoration: none">On commence!</a></div></div></div>' 
        }
        var login = {
        template:'<div class="header_mid"><div class="header_mid_content"><div class="main-agileits"><div class="form-w3-agile"><h2 class="sub-agileits-w3layouts">Se connecter</h2><form action="index.php" method="post"><input maxlength="15" minlength="3" type="text" name="inscLogin" placeholder="username" required><input maxlength="15" minlength="6" type="password"  name="inscPassword" placeholder="mot de passe" required><div class="submit-w3l"><input type="submit" value=" Se connecter" @click="after_connect"><div class="dejauncompte"><a href="#/inscription" style="text-decoration: none">Nouveau compte?</a></div></div></form></div></div>'
        }
        var inscription = {
            template:'<div class="header_mid_inscription"><div class="header_mid_content"><div class="main-agileits"><div class="form-w3-agile"><h2 class="sub-agileits-w3layouts">Inscription</h2><form action="index.php" method="post"><input maxlength="15" minlength="3" type="text" name="inscLogin" placeholder="username" required><input maxlength="15" minlength="6" type="password" name="inscPassword" placeholder="mot de passe" required><input type="email" name="mail" placeholder="email" required/><input type="text" name="nom" placeholder="nom" required/><input type="text" name="prenom" placeholder="prenom" required/><div class="submit-w3l"><input type="submit" value="Créez un compte" /><div class="dejauncompte"><a href="#/login" style="text-decoration: none">Deja un compte?</a></div></div></form></div></div>'
        }
        //实例化一个路由
        var routerobj = new VueRouter({
            routes: [
                    {path:'/',component: welcome},
                    {path:'/login',component: login},
                    {path:'/inscription',component: inscription}            
            ]
        })
    
    var vm = new Vue({
        el:'#app',
        data:{
           tologin:false
        },
        methods: {
            jumptologin(){
                this.tologin = true
            }

        },
        router:routerobj
    })

    var loaded = false;
    var loaded2 = false;
   /*  $('.contact').on('mouseenter',function(){
        if(!loaded){
            $('.card').load('/card/card.html');
            loaded = true;
        }
        $('.card').slideDown(600);
    })
    $('.contact').on('mouseleave',function(){
        $('.card').slideUp(600);
    })

    $('.plz_donate').on('mouseenter',function(){
        if(!loaded2){
            $('.donate').load('/donate/donate.html');
            loaded2 = true;
        }
        $('.donate').slideDown(600);
    })
    $('.plz_donate').on('mouseleave',function(){
        $('.donate').slideUp(600);
    }) */
</script>

    <style>
    .router-link-active{
        color: brown;
        font-weight: 900;
    }
    .v-enter,
    .v-leave-to{
        opacity: 0;
        transform: translateX(200px);
    }
    .v-enter-active,
    .v-leave-active{
        transition: all 1s ease;  
    }
    </style>


</body>

</html>
