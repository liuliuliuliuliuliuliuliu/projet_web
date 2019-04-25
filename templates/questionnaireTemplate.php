<script>document.getElementById("app").style.display="none"</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/style3.css">
    <script src="js/jquery.js"></script>
    <script src="js/vue.js"></script>
    <script src="js/vue-router.js"></script>  
    <script>
    document.onreadystatechange = function () {//即在加载的过程中执行下面的代码
        if(document.readyState=="complete"){//complete加载完成
            $(".loading").fadeOut();
        }
    }</script>
    <title>个人信息</title>
</head>
<body>
    <div id="app2" style="width:60%;margin:0 auto;">
<div class="loading">
        <div class="pic">
            <i></i>
            <i></i>
            <i></i>
            <i></i>
            <i></i>
        </div>
</div>

        <transition mode='out-in'>
            <router-view></router-view>                          
        </transition>
        <div id="header_mid">

        <div class="header_mid">
            <div class="header_mid_content">
                
                 <div class="main-agileits">
		<div class="form-w3-agile_1">
            <div class="information_personnel">informations</div>
            <div class="table">
            <table>
            
                <tr>
                    <th>Titre： </th>
                    <td><?php echo $this->user->titre_questionnaire() ?></td>
                </tr>
               
                
            </table>
            </div>
		</div>
    </div>
    <div class="commencer">
                    <a href="#/login" @click="gotoconnect" style="text-decoration: none">Aller à la connexion</a>
                </div>
    <div class="copyright w3-agile">
        
    </div>
                </div>
                
            </div>          
        </div>
    </div> 
    </div>
    </div>
    <script>
        var login = {
            template:'<div class="header_mid"><div class="header_mid_content"><h1>Se connecter</h1><div class="main-agileits"><div class="form-w3-agile"><h2 class="sub-agileits-w3layouts">Se connecter</h2><form action="index.php" method="post"><input maxlength="15" minlength="3" type="text" name="inscLogin" placeholder="username" required><input maxlength="15" minlength="6" type="password"  name="inscPassword" placeholder="mot de passe" required><div class="submit-w3l"><input type="submit" value=" Se connecter"><div class="dejauncompte"><a href="#/inscription" style="text-decoration: none">Nouveau compte?</a></div></div></form></div></div>'
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
        el:'#app2',
        data:{
           tologin:false
        },
        methods: {
            jumptologin(){
                this.tologin = true
            },
            gotoconnect(){
                document.getElementById("header_mid").style.display="none"
            }


        },
        router:routerobj
    })
</script>

</body>
</html>