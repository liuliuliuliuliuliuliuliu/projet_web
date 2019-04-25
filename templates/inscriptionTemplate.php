<script>document.getElementById("app").style.display="none"</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/vue.js"></script>
    <script src="js/vue-router.js"></script>  
    <script>
    document.onreadystatechange = function () {//即在加载的过程中执行下面的代码
        if(document.readyState=="complete"){//complete加载完成
            $(".loading").fadeOut();
        }
    }</script>
    <title>CONNECTION</title>
</head>
<body>
    <div id="app3">
    <transition mode='out-in'>
            <router-view></router-view>                          
        </transition>
        <div id="header_mid_inscription">
        
        <div class="header_mid_inscription">
            <div class="header_mid_content">
                <h1>Créez un compte</h1>
                <div class="main-agileits">
                    <div class="form-w3-agile">
                        <h2 class="sub-agileits-w3layouts">Inscription</h2>
                        <form action="index.php" method="post">
                            <input maxlength="15" minlength="3" type="text" name="inscLogin" placeholder="username" required>
                            <input maxlength="15" minlength="6" type="password" name="inscPassword" placeholder="mot de passe" required>
                            <input type="email" name="mail" placeholder="email" required/><input type="text" name="nom" placeholder="nom" required/>
                            <input type="text" name="prenom" placeholder="prenom" required/><div class="submit-w3l">
                                <input type="submit" value="Créez un compte" /><div class="dejauncompte">
                                    <a href="#/login" @click="gotoconnect">Deja un compte?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
                </div>
    <script>

var login = {
            template:'<div class="header_mid"><div class="header_mid_content"><div class="main-agileits"><div class="form-w3-agile"><h2 class="sub-agileits-w3layouts">Se connecter</h2><form action="index.php" method="post"><input maxlength="15" minlength="3" type="text" name="inscLogin" placeholder="username" required><input maxlength="15" minlength="6" type="password"  name="inscPassword" placeholder="mot de passe" required><div class="submit-w3l"><input type="submit" value=" Se connecter"><div class="dejauncompte"><a href="#/inscription">Nouveau compte?</a></div></div></form></div></div>'
        }
var routerobj = new VueRouter({
            routes: [
                //路由匹配规则
               /*  {path:'/father',component: father,children:[ */
                    {path:'/login',component: login},
                    
                /* ]}, *///此处的组件必须是一个对象而不是名字
                
            ]
        })
        var vm = new Vue({
        el:'#app3',
        data:{
           tologin:false
        },
        methods: {
            jumptologin(){
                this.tologin = true
            },
            gotoconnect(){
                document.getElementById("header_mid_inscription").style.display="none"
            }


        },
        router:routerobj
    })
</script>
</body>
</html>