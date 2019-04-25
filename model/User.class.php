<?php
    class User extends Model {
        protected $nom,$prenom,$mail,$id;
        protected $password;
        protected $ROLE;
        protected $PROMO;
        protected $INE;
        protected $MATRICULE;
        protected $INTEXT;
        protected $login;
        protected static $table_name = 'USER';
       /* protected $titre;
        protected $questionnaire;
        protected $description;
        protected $idModeAcces;
        protected $idEtat;
        protected $matricule;
        protected $dateOuverture;
        protected $dateFermeture;
        protected $modifiable;
        protected $supprimable;
        protected $temps;
        protected $retourarriere;*/

        
        
        public  static function create_1($titre, $description, $idModeAcces,$idEtat,$mail_questionnaire,$matricule,$dateOuverture,$dateFermeture,$modifiable,$supprimable,$temps,$retourarriere) {
            /*$idQuestionnaire=$questionnaire->idQuestionnaire();*/
            static::db()->exec("INSERT INTO QUESTIONNAIRE (TITRE,DESCRIPTION,ID_MODE_D_ACCES,ID_ETAT,MAIL,MATRICULE,DATE_OUVERTURE,DATE_FERMETURE,MODIFIABLE,SUPPRIMABLE,TEMPS_MAX,RETOUR_ARRIERE) VALUES('$titre', '$description', '$idModeAcces','$idEtat','$mail_questionnaire','$matricule','$dateOuverture','$dateFermeture','$modifiable','$supprimable','$temps','$retourarriere')");
            
        }
        public  static function create_reponse1($reponseQCM1,$reponseQCM2,$reponseQCM3,$reponseQCM4) {
            
            static::db()->exec("INSERT INTO REPONSES_POSSIBLES (REPONSE) VALUES('$reponseQCM1')");
           
        }
        public  static function create_reponse2($reponseQCU1,$reponseQCU2,$reponseQCU3,$reponseQCU4,$reponseQCU) {
            
            static::db()->exec("INSERT INTO REPONSES_POSSIBLE (REPONSE,BONNE_REPONSE) VALUES('$reponseQCU1',$reponseQCU)");
            
        }     
        public  static function create_reponse3($reponseQRL) {
            
            static::db()->exec("INSERT INTO REPONSES_POSSIBLES (REPONSE) VALUES('$reponseQRL')");
            
        }      
        public static function addSQLQuery($key, $sql){
            self::$queries[$key] = $sql;
        }
        
      
        public  static function create($login, $pwd,$nom,$prenom,$mail) {
            
            static::db()->exec("INSERT INTO users (login,password,mail,nom,prenom) VALUES('$login', '$pwd', '$mail','$nom','$prenom')");
            
            return static::tryLogin($login, $pwd);
        }
        public  static function create_2($idTypeQuestion,$timeQuestion,$questionText){
            
            static::db()->exec("INSERT INTO QUESTION (ID_TYPE_QUESTION, TEMPS_MAX_QUESTION, QUESTION) VALUES('$idTypeQuestion','$timeQuestion','$questionText')");
        }
                
        /* public static function findQuestionnaire($idQuestionnaire){
            $sql = "select  * FROM questionnaire WHERE ID_QUESTIONNAIRE='$idQuestionnaire'";
            $st = static::db()->query($sql);
            $st ->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Prof");
            $questionnaire = $st->fetch();
            
            return $questionnaire;
        } */
        public static function tryLogin($login, $pwd){
            $st = static::db()->query("select  * from users where login='$login' and password='$pwd'");
            $st ->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "user");
            
            $user = $st->fetch();
            
            return $user;
        }
	

    public function id(){
        return $this ->id;
        
    }

    public static function isLoginUsed ($login){
        $st = static::db()->query("select login from users where login='$login'");
      //  $a=$request->execute();     
        $st ->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "user");
        $user = $st-> fetch();
        return $user!=null;
    }

    public static function getWithId($userId){
        $st = static::db()->query("select  * from users where id ='$userId'");
        $st ->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "user");
        $user = $st-> fetch();
        return $user;
            

    }
    public function login(){
        return $this ->login;

    }

    public function mail(){
        return $this ->mail;

    }

    public function prenom(){
        return $this ->prenom;

    }

    public function nom(){
        return $this ->nom;

    }

    
}
?>