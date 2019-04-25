<?php
    class Prof extends Model {
        protected $titre;
        protected $questionnaire;
        protected $idQuestionnaire;
        protected $description;
        protected $idModeAcces;
        protected $idEtat;
        protected $mail_questionnaire;
        protected $matricule;
        protected $dateOuverture;
        protected $dateFermeture;
        protected $modifiable;
        protected $supprimable;
        protected $temps;
        protected $retourarriere;
        protected $idQuestion,$idTypeQuestion,$timeQuestion,$questionText;
        protected  $reponseQCM1,$reponseQCM2,$reponseQCM3,$reponseQCM4;
        protected  $reponseQCU1,$reponseQCU2,$reponseQCU3;
        protected  $reponseQRL;
        protected static $table_name = 'USER';

        public static function addSQLQuery($key, $sql){
            self::$queries[$key] = $sql;
        }
        
        public  static function create_1($titre, $description, $idModeAcces,$idEtat,$mail_questionnaire,$matricule,$dateOuverture,$dateFermeture,$modifiable,$supprimable,$temps,$retourarriere) {
            /*$idQuestionnaire=$questionnaire->idQuestionnaire();*/
            static::db()->exec("INSERT INTO QUESTIONNAIRE (TITRE,DESCRIPTION,ID_MODE_D_ACCES,ID_ETAT,MAIL,MATRICULE,DATE_OUVERTURE,DATE_FERMETURE,MODIFIABLE,SUPPRIMABLE,TEMPS_MAX,RETOUR_ARRIERE) VALUES('$titre', '$description', '$idModeAcces','$idEtat','$mail_questionnaire','$matricule','$dateOuverture','$dateFermeture','$modifiable','$supprimable','$temps','$retourarriere')");
            
        }
        public  static function create_reponse1($reponseQCM1,$reponseQCM2,$reponseQCM3,$reponseQCM4) {
            
            static::db()->exec("INSERT INTO REPONSES_POSSIBLES (REPONSE) VALUES('$reponseQCM1'),('$reponseQCM2'),('$reponseQCM3'),('$reponseQCM4')");
            
        }    
        public  static function create_reponse2($reponseQCU1,$reponseQCU2,$reponseQCU3,$reponseQCU4,$reponseQCU) {
            
            static::db()->exec("INSERT INTO REPONSES_POSSIBLES (REPONSE,BONNE_REPONSE) VALUES('$reponseQCU1',$reponseQCU)");
            
        }     
        public  static function create_2($idTypeQuestion,$timeQuestion,$questionText){
            
            static::db()->exec("INSERT INTO QUESTION (ID_TYPE_QUESTION, TEMPS_MAX_QUESTION, QUESTION) VALUES('$idTypeQuestion','$timeQuestion','$questionText')");
        }
        
        public  static function create_reponse3($reponseQRL) {
            
            static::db()->exec("INSERT INTO REPONSES_POSSIBLES (REPONSE) VALUES('$reponseQRL')");
            
        }    

    public function idQuestionnaire(){
        return $this ->ID_QUESTIONNAIRE;
        
    }

   /*  public static function isTitreUsed ($titre){
        $st = static::db()->query("select TITRE from questionnaire where TITRE='$titre'");
      //  $a=$request->execute();     
        $st ->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "prof");
        $titre = $st-> fetch();
        return $titre!=null;
    }
 */
    public static function getWithId($ID_QUESTIONNAIRE){
        $st = static::db()->query("select  * from QUESTIONNAIRE where ID_QUESTIONNAIRE ='$ID_QUESTIONNAIRE'");
        $st ->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Prof");
        $questionnaire = $st-> fetch();
        return $questionnaire;
            

    }
    public function mail(){
        return $this ->MAIL;

    }

    public function date_ouverture(){
        return $this ->DATE_OUVERTURE;

    }
    public function date_fermeture(){
        return $this ->DATE_FERMETURE;

    }

    public function titre_questionnaire(){
        return $this ->TITRE;

    }
    public function description(){
        return $this ->DESCRIPTION;

    }


    public static function findQuestionnaire($idQuestionnaire){
        $sql = "select  * FROM QUESTIONNAIRE WHERE ID_QUESTIONNAIRE='$idQuestionnaire'";
        $st = static::db()->query($sql);
        $st ->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "prof");
        $questionnaire = $st->fetch();
        
        return $questionnaire;
    }
    
       
}
?>