<script>
document.getElementById("app").style.display="none";
$("#de_connecter").show();
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/style.css">
    <title>主页</title>
</head>
<body>

    <div class="header_mid">
        <div class="header_mid_content">
            <div class="bienvenu">Bienvenue,<?php echo $this->user->login() ?></div>
            <hr>
            <!-- <div class="introduction">学生主页</div>
            <div class="commencer">
                <a href="#/etudientquestion">Entrez!</a> 
            </div>  -->
            <div class="header-content-1" style="top:40%">
				<div class="header-content-inner" style="max-width:600px">
					<h1 style="font-size:27px"id="homeHeading">Questionnaires a faire</h1>
					<hr>
					<div class="question_card">
						<div class="question_card_1">
							<a href="#/etudientquestion/question_1" style="display:block;width:100%;height:100%;text-decoration: none;">
							<h2>Questionnaire</h2>
							<div>Titre:<?php $q=Prof::findQuestionnaire(19); echo $q->titre_questionnaire() ?></div>
							<div>Description:<?php $q=Prof::findQuestionnaire(19); echo $q->description() ?></div>
							<div>Date Ouverture:<?php $q=Prof::findQuestionnaire(19); echo $q->date_ouverture() ?></div>
							<div>Date Fermeture:<?php $q=Prof::findQuestionnaire(19); echo $q->date_fermeture() ?></div>
							<div>Email de professeur:<?php $q=Prof::findQuestionnaire(19); echo $q->mail() ?></div>
							</a>   
						</div>
					</div>       
				</div>
			</div>
        </div>   
        
        <div class="question_precis_1" style="display:none">
            <form action="" method="">
                <h4>calcul 1+1?</h4>
                <br>
                <label><input name="numbre" type="radio" value="1" />1 </label>
                <label><input name="numbre" type="radio" value="2" />2 </label>
                <label><input name="numbre" type="radio" value="3" />3 </label>
                <label><input name="numbre" type="radio" value="4" />4 </label>
                <br>
                <br>
                <br>
                <!-- <a href="#/question_2" style="display:block;float:right;"> Suivant</a> -->
                <input type="submit" value="Go!">
            </form>
        </div>
    </div> 




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
    Router.route('/etudientquestion', function() {
        $(".header_mid_content").hide();
        $(".header-content-1").show();

    });
    Router.route('/etudientquestion/question_1', function() {
        /*  $(".header_mid_content").hide(); */
        $(".header-content-1").hide(); 
        
        $(".question_precis_1").show();

    });
        </script>
</body>
</html>
