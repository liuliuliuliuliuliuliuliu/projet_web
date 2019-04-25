<?php
    class ProfController extends Controller {
        protected $questionnaire,$args;
        
        public function __construct($currentRequest) {
            parent::__construct($currentRequest);
            if(count($_POST)==2){
                $this -> createQCM($currentRequest);
            }
            
            $this -> createQuestionnaire($currentRequest);
          /*   $userId = $currentRequest->read('user');
            $this->prof = User::getWithId($userId); */
          
            
        }
      // actions linked to questions  

        public function defaultAction(){
            $view -> setUser($this->user);
            $view->render();
            
        }
        

       /* public function createQuestion(){
            $typeQuestion = $this->request->read("typeQuestion");
            $_SESSION["matiereQuestion"]=$this->request->read("matiereQuestion");
            $view = new EnseignantView($this,'creationQuestion'.$typeQuestion);
            $view -> setUser($this->user);
            $view->render();
        }

        public function validateCreationTextQuestion(){
            $matiere = $_SESSION["matiereQuestion"];
            $DUREE = $this->request->read("DUREE");
            $ENONCER = $this->request->read("ENONCER");
            $CORRECTION = $this->request->read("CORRECTION");
            $question =  Question::create($ENONCER, "texte", $CORRECTION, $DUREE,$this->user,$matiere);
            echo("<script>alert('Question crée avec succès');</script>");
            header("Location:".__BASE_URL."/ajoutQuestionnaire.php?controller=Prof");
        }
        
        public function validateCreationQcmQuestion(){
            print_r($_POST);
            $matiere = $_SESSION["matiereQuestion"];
            $DUREE = $this->request->read("DUREE");
            $ENONCER = $this->request->read("ENONCER");
            $question =  Question::create($ENONCER, "QCM", "NULL", $DUREE,$this->user,$matiere);
            $ID_QUESTION = $question->ID_QUESTION();
            $nbrOption = (($this->request->nbrArg())- 2)/2;
            echo ($nbrOption);
            echo('<br>');
            $c=0;$i=1;
            while($c<$nbrOption){
                if($this->request->read("Option".$i)!=null){
                    echo($i);echo('<br>');
                    $TEXTE = $this->request->read("Option".$i);
                    echo($TEXTE);echo('<br>');
                    $COLONNE="0";
                    $valeur=$this->request->read("checkbox".$i);
                    echo($valeur);echo('<br>');

                    $choix=Choix::create($ID_QUESTION,$TEXTE,$COLONNE,$valeur);
                    $c++;
                }
                $i++;
            }
            
            header("Location:".__BASE_URL."/ajoutQuestionnaire.php?controller=Prof");


        }*/


        public function voir_questionnaire($request) {
            $view = new UserView($this,'questionnaire');
            $view ->setUser($this->user);
            $view->render();
        }

        
    }

    

?>