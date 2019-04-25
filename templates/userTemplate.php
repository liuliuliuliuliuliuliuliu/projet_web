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

    <header>
        <div class="header-content">
            <div class="header-content-inner">
            </div>
        </div>
    </header>
        <div class="header_mid">
            <div class="header_mid_content">
                <div class="bienvenu">Bienvenue, <?php echo $this->user->login() ?></div>
                <hr>
                <div class="introduction">C'est mon projet Web</div>
                <div class="commencer">
                    <a href="homeProf.php">Entrez!</a>
                </div>
                
            </div>          
        </div>
    </div> 
</body>
</html>
