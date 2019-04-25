<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 4.6.6deb4
 */

/**
 * Database `oumaima_jeddi`
 */

/* `oumaima_jeddi`.`APPARIEMENT` */
$APPARIEMENT = array(
  array('ID_REPONSES_POSSIBLES' => '1','REP_ID_REPONSES_POSSIBLES' => '2'),
  array('ID_REPONSES_POSSIBLES' => '4','REP_ID_REPONSES_POSSIBLES' => '6')
);

/* `oumaima_jeddi`.`ENSEIGNANT` */
$ENSEIGNANT = array(
  array('MAIL' => 'zhe.wang@etu.imt-lille-douai.fr','MATRICULE' => '10235','NOM' => 'Wang','PRENOM' => 'Zhe','INTERNE' => '1')
);

/* `oumaima_jeddi`.`EST_PARMI` */
$EST_PARMI = array(
  array('ID_REPONSE_CHOISIE' => '1','ID_REPONSES_POSSIBLES' => '6'),
  array('ID_REPONSE_CHOISIE' => '3','ID_REPONSES_POSSIBLES' => '9')
);

/* `oumaima_jeddi`.`EST_SPECIFIE` */
$EST_SPECIFIE = array(
  array('ID_REGLES_QUESTIONNAIRE' => '1','LIBELLE' => '#C','QUANTITE' => '2'),
  array('ID_REGLES_QUESTIONNAIRE' => '2','LIBELLE' => '#PHP','QUANTITE' => '3')
);

/* `oumaima_jeddi`.`EST_TAGGE` */
$EST_TAGGE = array(
  array('ID_QUESTION' => '1','LIBELLE' => '#C'),
  array('ID_QUESTION' => '2','LIBELLE' => '#Java'),
  array('ID_QUESTION' => '2','LIBELLE' => '#Pharo'),
  array('ID_QUESTION' => '3','LIBELLE' => '#PHP'),
  array('ID_QUESTION' => '5','LIBELLE' => '#UML'),
  array('ID_QUESTION' => '11','LIBELLE' => '#UML'),
  array('ID_QUESTION' => '12','LIBELLE' => '#C'),
  array('ID_QUESTION' => '13','LIBELLE' => '#C'),
  array('ID_QUESTION' => '14','LIBELLE' => '#C'),
  array('ID_QUESTION' => '15','LIBELLE' => '#C'),
  array('ID_QUESTION' => '16','LIBELLE' => '#SQL'),
  array('ID_QUESTION' => '17','LIBELLE' => '#SQL'),
  array('ID_QUESTION' => '18','LIBELLE' => '#SQL'),
  array('ID_QUESTION' => '19','LIBELLE' => '#SQL'),
  array('ID_QUESTION' => '20','LIBELLE' => '#SQL'),
  array('ID_QUESTION' => '21','LIBELLE' => '#Pharo'),
  array('ID_QUESTION' => '22','LIBELLE' => '#Pharo'),
  array('ID_QUESTION' => '23','LIBELLE' => '#Pharo'),
  array('ID_QUESTION' => '24','LIBELLE' => '#Pharo'),
  array('ID_QUESTION' => '25','LIBELLE' => '#Java'),
  array('ID_QUESTION' => '26','LIBELLE' => '#Java'),
  array('ID_QUESTION' => '27','LIBELLE' => '#Java'),
  array('ID_QUESTION' => '28','LIBELLE' => '#Java'),
  array('ID_QUESTION' => '29','LIBELLE' => '#PHP'),
  array('ID_QUESTION' => '30','LIBELLE' => '#PHP')
);

/* `oumaima_jeddi`.`ETAT` */
$ETAT = array(
  array('PROGRAMME' => '1','EN_COURS' => '0','NON_CORRIGE' => '1','EXPIRE' => '0','CORRIGE' => '0','ID_ETAT' => '1'),
  array('PROGRAMME' => '1','EN_COURS' => '0','NON_CORRIGE' => '0','EXPIRE' => '0','CORRIGE' => '1','ID_ETAT' => '2')
);

/* `oumaima_jeddi`.`ETUDIANT` */
$ETUDIANT = array(
  array('MAIL' => 'kendal.cousy@etu.imt-lille-douai.fr','NOM' => 'Cousy','PRENOM' => 'Kendal','ANNEE_SORTIE' => '2020'),
  array('MAIL' => 'oumaima.jeddi@etu.imt-lille-douai.fr','NOM' => 'jeddi','PRENOM' => 'Oumaima','ANNEE_SORTIE' => '2020')
);

/* `oumaima_jeddi`.`MODE_ACCES` */
$MODE_ACCES = array(
  array('CONNECTE' => '1','LIEN' => '0','ID_MODE_D_ACCES' => '1','LIEN_HTTP' => NULL),
  array('CONNECTE' => '0','LIEN' => '1','ID_MODE_D_ACCES' => '2','LIEN_HTTP' => 'lien1')
);

/* `oumaima_jeddi`.`PARTICIPE` */
$PARTICIPE = array(
  array('ID_QUESTIONNAIRE' => '1','MAIL' => 'kendal.cousy@etu.imt-lille-douai.fr','DATE_PARTICIPATION' => '0000-00-00','SCORE_TOTAL' => '0','CLASSEMENT' => '0'),
  array('ID_QUESTIONNAIRE' => '2','MAIL' => 'oumaima.jeddi@etu.imt-lille-douai.fr','DATE_PARTICIPATION' => '0000-00-00','SCORE_TOTAL' => '0','CLASSEMENT' => '0')
);

/* `oumaima_jeddi`.`POSSEDER` */
$POSSEDER = array(
  array('ID_QUESTIONNAIRE' => '1','ID_QUESTION' => '1','VRAI' => '1','FAUX' => NULL,'PARTIELLEMENT_FAUX' => NULL,'SCORE' => '4'),
  array('ID_QUESTIONNAIRE' => '1','ID_QUESTION' => '3','VRAI' => '1','FAUX' => NULL,'PARTIELLEMENT_FAUX' => NULL,'SCORE' => '11'),
  array('ID_QUESTIONNAIRE' => '1','ID_QUESTION' => '4','VRAI' => '1','FAUX' => NULL,'PARTIELLEMENT_FAUX' => NULL,'SCORE' => '8'),
  array('ID_QUESTIONNAIRE' => '1','ID_QUESTION' => '11','VRAI' => NULL,'FAUX' => NULL,'PARTIELLEMENT_FAUX' => NULL,'SCORE' => '0'),
  array('ID_QUESTIONNAIRE' => '1','ID_QUESTION' => '12','VRAI' => '1','FAUX' => NULL,'PARTIELLEMENT_FAUX' => NULL,'SCORE' => '3'),
  array('ID_QUESTIONNAIRE' => '1','ID_QUESTION' => '13','VRAI' => '1','FAUX' => NULL,'PARTIELLEMENT_FAUX' => NULL,'SCORE' => '4'),
  array('ID_QUESTIONNAIRE' => '1','ID_QUESTION' => '14','VRAI' => '1','FAUX' => NULL,'PARTIELLEMENT_FAUX' => NULL,'SCORE' => '5'),
  array('ID_QUESTIONNAIRE' => '1','ID_QUESTION' => '15','VRAI' => '1','FAUX' => NULL,'PARTIELLEMENT_FAUX' => NULL,'SCORE' => '2'),
  array('ID_QUESTIONNAIRE' => '2','ID_QUESTION' => '16','VRAI' => '1','FAUX' => NULL,'PARTIELLEMENT_FAUX' => NULL,'SCORE' => '6'),
  array('ID_QUESTIONNAIRE' => '2','ID_QUESTION' => '17','VRAI' => '1','FAUX' => NULL,'PARTIELLEMENT_FAUX' => NULL,'SCORE' => '4'),
  array('ID_QUESTIONNAIRE' => '2','ID_QUESTION' => '18','VRAI' => '1','FAUX' => NULL,'PARTIELLEMENT_FAUX' => NULL,'SCORE' => '2'),
  array('ID_QUESTIONNAIRE' => '2','ID_QUESTION' => '19','VRAI' => '1','FAUX' => NULL,'PARTIELLEMENT_FAUX' => NULL,'SCORE' => '7'),
  array('ID_QUESTIONNAIRE' => '2','ID_QUESTION' => '20','VRAI' => '1','FAUX' => NULL,'PARTIELLEMENT_FAUX' => NULL,'SCORE' => '6'),
  array('ID_QUESTIONNAIRE' => '2','ID_QUESTION' => '21','VRAI' => '1','FAUX' => NULL,'PARTIELLEMENT_FAUX' => NULL,'SCORE' => '5'),
  array('ID_QUESTIONNAIRE' => '2','ID_QUESTION' => '22','VRAI' => '1','FAUX' => NULL,'PARTIELLEMENT_FAUX' => NULL,'SCORE' => '3'),
  array('ID_QUESTIONNAIRE' => '3','ID_QUESTION' => '23','VRAI' => '1','FAUX' => NULL,'PARTIELLEMENT_FAUX' => NULL,'SCORE' => '5'),
  array('ID_QUESTIONNAIRE' => '3','ID_QUESTION' => '24','VRAI' => '1','FAUX' => NULL,'PARTIELLEMENT_FAUX' => NULL,'SCORE' => '4'),
  array('ID_QUESTIONNAIRE' => '3','ID_QUESTION' => '25','VRAI' => '1','FAUX' => NULL,'PARTIELLEMENT_FAUX' => NULL,'SCORE' => '4'),
  array('ID_QUESTIONNAIRE' => '3','ID_QUESTION' => '26','VRAI' => '1','FAUX' => NULL,'PARTIELLEMENT_FAUX' => NULL,'SCORE' => '2'),
  array('ID_QUESTIONNAIRE' => '3','ID_QUESTION' => '27','VRAI' => '1','FAUX' => NULL,'PARTIELLEMENT_FAUX' => NULL,'SCORE' => '2'),
  array('ID_QUESTIONNAIRE' => '3','ID_QUESTION' => '28','VRAI' => '1','FAUX' => NULL,'PARTIELLEMENT_FAUX' => NULL,'SCORE' => '1'),
  array('ID_QUESTIONNAIRE' => '3','ID_QUESTION' => '29','VRAI' => '1','FAUX' => NULL,'PARTIELLEMENT_FAUX' => NULL,'SCORE' => '1'),
  array('ID_QUESTIONNAIRE' => '3','ID_QUESTION' => '30','VRAI' => '1','FAUX' => NULL,'PARTIELLEMENT_FAUX' => NULL,'SCORE' => '1')
);

/* `oumaima_jeddi`.`QUESTION` */
$QUESTION = array(
  array('ID_QUESTION' => '1','ID_TYPE_QUESTION' => '2','TEMPS_MAX_QUESTION' => NULL,'QUESTION' => 'Voici la question 1'),
  array('ID_QUESTION' => '2','ID_TYPE_QUESTION' => '1','TEMPS_MAX_QUESTION' => NULL,'QUESTION' => 'Voici la question 2'),
  array('ID_QUESTION' => '3','ID_TYPE_QUESTION' => '3','TEMPS_MAX_QUESTION' => NULL,'QUESTION' => 'Voici la question 3'),
  array('ID_QUESTION' => '4','ID_TYPE_QUESTION' => '4','TEMPS_MAX_QUESTION' => '10','QUESTION' => 'Voici la question 4'),
  array('ID_QUESTION' => '5','ID_TYPE_QUESTION' => '4','TEMPS_MAX_QUESTION' => '5','QUESTION' => 'Voici la question 5'),
  array('ID_QUESTION' => '11','ID_TYPE_QUESTION' => '1','TEMPS_MAX_QUESTION' => '5','QUESTION' => 'Voici la question 11'),
  array('ID_QUESTION' => '12','ID_TYPE_QUESTION' => '1','TEMPS_MAX_QUESTION' => NULL,'QUESTION' => 'Voici la question 12'),
  array('ID_QUESTION' => '13','ID_TYPE_QUESTION' => '1','TEMPS_MAX_QUESTION' => NULL,'QUESTION' => 'Voici la question 13'),
  array('ID_QUESTION' => '14','ID_TYPE_QUESTION' => '2','TEMPS_MAX_QUESTION' => NULL,'QUESTION' => 'Voici la question 14'),
  array('ID_QUESTION' => '15','ID_TYPE_QUESTION' => '5','TEMPS_MAX_QUESTION' => NULL,'QUESTION' => 'Voici la question 15'),
  array('ID_QUESTION' => '16','ID_TYPE_QUESTION' => '5','TEMPS_MAX_QUESTION' => NULL,'QUESTION' => 'Voici la question 16'),
  array('ID_QUESTION' => '17','ID_TYPE_QUESTION' => '4','TEMPS_MAX_QUESTION' => NULL,'QUESTION' => 'Voici la question 17'),
  array('ID_QUESTION' => '18','ID_TYPE_QUESTION' => '3','TEMPS_MAX_QUESTION' => NULL,'QUESTION' => 'Voici la question 18'),
  array('ID_QUESTION' => '19','ID_TYPE_QUESTION' => '3','TEMPS_MAX_QUESTION' => NULL,'QUESTION' => 'Voici la question 19'),
  array('ID_QUESTION' => '20','ID_TYPE_QUESTION' => '2','TEMPS_MAX_QUESTION' => NULL,'QUESTION' => 'Voici la question 20'),
  array('ID_QUESTION' => '21','ID_TYPE_QUESTION' => '1','TEMPS_MAX_QUESTION' => NULL,'QUESTION' => 'Voici la question 21'),
  array('ID_QUESTION' => '22','ID_TYPE_QUESTION' => '1','TEMPS_MAX_QUESTION' => NULL,'QUESTION' => 'Voici la question 22'),
  array('ID_QUESTION' => '23','ID_TYPE_QUESTION' => '2','TEMPS_MAX_QUESTION' => NULL,'QUESTION' => 'Voici la question 23'),
  array('ID_QUESTION' => '24','ID_TYPE_QUESTION' => '2','TEMPS_MAX_QUESTION' => NULL,'QUESTION' => 'Voici la question 24'),
  array('ID_QUESTION' => '25','ID_TYPE_QUESTION' => '2','TEMPS_MAX_QUESTION' => NULL,'QUESTION' => 'Voici la question 25'),
  array('ID_QUESTION' => '26','ID_TYPE_QUESTION' => '3','TEMPS_MAX_QUESTION' => NULL,'QUESTION' => 'Voici la question 26'),
  array('ID_QUESTION' => '27','ID_TYPE_QUESTION' => '4','TEMPS_MAX_QUESTION' => NULL,'QUESTION' => 'Voici la question 27'),
  array('ID_QUESTION' => '28','ID_TYPE_QUESTION' => '4','TEMPS_MAX_QUESTION' => NULL,'QUESTION' => 'Voici la question 28'),
  array('ID_QUESTION' => '29','ID_TYPE_QUESTION' => '4','TEMPS_MAX_QUESTION' => NULL,'QUESTION' => 'Voici la question 29'),
  array('ID_QUESTION' => '30','ID_TYPE_QUESTION' => '5','TEMPS_MAX_QUESTION' => NULL,'QUESTION' => 'Voici la question 30')
);

/* `oumaima_jeddi`.`QUESTIONNAIRE` */
$QUESTIONNAIRE = array(
  array('TITRE' => 'Questionnaire1','DESCRIPTION' => 'Répondre aux questions suivantes','ID_QUESTIONNAIRE' => '1','ID_MODE_D_ACCES' => '1','ID_ETAT' => '2','MAIL' => 'zhe.wang@etu.imt-lille-douai.fr','MATRICULE' => '10235','DATE_OUVERTURE' => '2019-03-19','DATE_FERMETURE' => '2019-03-28','MODIFIABLE' => '1','SUPPRIMABLE' => '0','TEMPS_MAX' => '4','RETOUR_ARRIERE' => '0'),
  array('TITRE' => 'Questionnaire2','DESCRIPTION' => 'Répondre aux questions du Questionnaire 2','ID_QUESTIONNAIRE' => '2','ID_MODE_D_ACCES' => '2','ID_ETAT' => '1','MAIL' => 'zhe.wang@etu.imt-lille-douai.fr','MATRICULE' => '10235','DATE_OUVERTURE' => '2019-03-29','DATE_FERMETURE' => '2019-04-09','MODIFIABLE' => '0','SUPPRIMABLE' => '0','TEMPS_MAX' => '2','RETOUR_ARRIERE' => '0'),
  array('TITRE' => 'Questionnaire3','DESCRIPTION' => 'Quesionnaire sur plusieurs sujets','ID_QUESTIONNAIRE' => '3','ID_MODE_D_ACCES' => '1','ID_ETAT' => '1','MAIL' => 'zhe.wang@etu.imt-lille-douai.fr','MATRICULE' => '10235','DATE_OUVERTURE' => '0000-00-00','DATE_FERMETURE' => '0000-00-00','MODIFIABLE' => '1','SUPPRIMABLE' => '1','TEMPS_MAX' => '5','RETOUR_ARRIERE' => '0')
);

/* `oumaima_jeddi`.`REGLES_QUESTIONNAIRE` */
$REGLES_QUESTIONNAIRE = array(
  array('ORDRE' => '12345','ID_REGLES_QUESTIONNAIRE' => '1'),
  array('ORDRE' => '25413','ID_REGLES_QUESTIONNAIRE' => '2')
);

/* `oumaima_jeddi`.`REPONSES_POSSIBLES` */
$REPONSES_POSSIBLES = array(
  array('REPONSE' => 'Réponse 1','ID_REPONSES_POSSIBLES' => '1','ID_QUESTION' => '1','BONNE_REPONSE' => '1'),
  array('REPONSE' => 'Réponse 2','ID_REPONSES_POSSIBLES' => '2','ID_QUESTION' => '3','BONNE_REPONSE' => '1'),
  array('REPONSE' => 'Réponse 3','ID_REPONSES_POSSIBLES' => '3','ID_QUESTION' => '2','BONNE_REPONSE' => '0'),
  array('REPONSE' => 'Réponse 4','ID_REPONSES_POSSIBLES' => '4','ID_QUESTION' => '3','BONNE_REPONSE' => '0'),
  array('REPONSE' => 'Réponse 5','ID_REPONSES_POSSIBLES' => '5','ID_QUESTION' => '5','BONNE_REPONSE' => '0'),
  array('REPONSE' => 'Réponse 6','ID_REPONSES_POSSIBLES' => '6','ID_QUESTION' => '3','BONNE_REPONSE' => '0'),
  array('REPONSE' => 'Réponse 7','ID_REPONSES_POSSIBLES' => '7','ID_QUESTION' => '5','BONNE_REPONSE' => '1'),
  array('REPONSE' => 'Réponse 8','ID_REPONSES_POSSIBLES' => '8','ID_QUESTION' => '5','BONNE_REPONSE' => '0'),
  array('REPONSE' => 'Réponse 9','ID_REPONSES_POSSIBLES' => '9','ID_QUESTION' => '4','BONNE_REPONSE' => '0'),
  array('REPONSE' => 'Réponse 10','ID_REPONSES_POSSIBLES' => '10','ID_QUESTION' => '2','BONNE_REPONSE' => '1'),
  array('REPONSE' => 'Voici la réponse 5','ID_REPONSES_POSSIBLES' => '15','ID_QUESTION' => '11','BONNE_REPONSE' => '1'),
  array('REPONSE' => 'Réponse 20','ID_REPONSES_POSSIBLES' => '36','ID_QUESTION' => '1','BONNE_REPONSE' => '0'),
  array('REPONSE' => '"Réponse 21"','ID_REPONSES_POSSIBLES' => '37','ID_QUESTION' => '3','BONNE_REPONSE' => '0'),
  array('REPONSE' => '"Réponse 22"','ID_REPONSES_POSSIBLES' => '38','ID_QUESTION' => '4','BONNE_REPONSE' => '0'),
  array('REPONSE' => '"Réponse 23"','ID_REPONSES_POSSIBLES' => '39','ID_QUESTION' => '1','BONNE_REPONSE' => '0'),
  array('REPONSE' => '"Réponse 24"','ID_REPONSES_POSSIBLES' => '40','ID_QUESTION' => '5','BONNE_REPONSE' => '1'),
  array('REPONSE' => '"Réponse 25"','ID_REPONSES_POSSIBLES' => '41','ID_QUESTION' => '1','BONNE_REPONSE' => '0'),
  array('REPONSE' => '"Réponse 26"','ID_REPONSES_POSSIBLES' => '42','ID_QUESTION' => '5','BONNE_REPONSE' => '1'),
  array('REPONSE' => '"Réponse 27"','ID_REPONSES_POSSIBLES' => '43','ID_QUESTION' => '2','BONNE_REPONSE' => '0'),
  array('REPONSE' => '"Réponse 28"','ID_REPONSES_POSSIBLES' => '44','ID_QUESTION' => '2','BONNE_REPONSE' => '1'),
  array('REPONSE' => '"Réponse 29"','ID_REPONSES_POSSIBLES' => '45','ID_QUESTION' => '11','BONNE_REPONSE' => '0')
);

/* `oumaima_jeddi`.`REPONSE_CHOISIE` */
$REPONSE_CHOISIE = array(
  array('OK' => '1','ID_REPONSE_CHOISIE' => '1','ID_QUESTION' => '1','MAIL' => 'kendal.cousy@etu.imt-lille-douai.fr'),
  array('OK' => '0','ID_REPONSE_CHOISIE' => '2','ID_QUESTION' => '3','MAIL' => 'oumaima.jeddi@etu.imt-lille-douai.fr'),
  array('OK' => '1','ID_REPONSE_CHOISIE' => '3','ID_QUESTION' => '4','MAIL' => 'oumaima.jeddi@etu.imt-lille-douai.fr'),
  array('OK' => '1','ID_REPONSE_CHOISIE' => '4','ID_QUESTION' => '3','MAIL' => 'kendal.cousy@etu.imt-lille-douai.fr'),
  array('OK' => '0','ID_REPONSE_CHOISIE' => '5','ID_QUESTION' => '5','MAIL' => 'oumaima.jeddi@etu.imt-lille-douai.fr')
);

/* `oumaima_jeddi`.`SPECIFIE` */
$SPECIFIE = array(
  array('ID_QUESTIONNAIRE' => '1','ID_REGLES_QUESTIONNAIRE' => '2'),
  array('ID_QUESTIONNAIRE' => '2','ID_REGLES_QUESTIONNAIRE' => '1')
);

/* `oumaima_jeddi`.`TAG` */
$TAG = array(
  array('LIBELLE' => '#C'),
  array('LIBELLE' => '#Java'),
  array('LIBELLE' => '#Pharo'),
  array('LIBELLE' => '#PHP'),
  array('LIBELLE' => '#SQL'),
  array('LIBELLE' => '#UML')
);

/* `oumaima_jeddi`.`TYPE_QUESTION` */
$TYPE_QUESTION = array(
  array('ID_TYPE_QUESTION' => '1','QCM' => '1','QCU' => '0','QRL' => '0','APPARIEMENT' => '0'),
  array('ID_TYPE_QUESTION' => '2','QCM' => '0','QCU' => '1','QRL' => '0','APPARIEMENT' => '0'),
  array('ID_TYPE_QUESTION' => '3','QCM' => '0','QCU' => '0','QRL' => '0','APPARIEMENT' => '1'),
  array('ID_TYPE_QUESTION' => '4','QCM' => '0','QCU' => '0','QRL' => '1','APPARIEMENT' => '0'),
  array('ID_TYPE_QUESTION' => '5','QCM' => '1','QCU' => '0','QRL' => '0','APPARIEMENT' => '0')
);

/* `oumaima_jeddi`.`users` */
$users = array(
  array('id' => '1','login' => 'oumaima.jeddi','password' => 'sfLVNUro','nom' => 'Wang','prenom' => 'Zhe','mail' => 'zhe.wang.imtlilledouai@gmail.com'),
  array('id' => '2','login' => 'qwe','password' => 'sfLVNUro','nom' => 'Wang','prenom' => 'Zhe','mail' => 'zhe.wang.imtlilledouai@gmail.com'),
  array('id' => '3','login' => 'qweweqqw','password' => 'sfLVNUro','nom' => 'wqeqwe','prenom' => 'eqw','mail' => 'eqweq'),
  array('id' => '4','login' => 'oumaima.jeddifyyt','password' => 'tye','nom' => 'tert','prenom' => 'ertet','mail' => 'etrt'),
  array('id' => '5','login' => 'q','password' => 'sfLVNUro','nom' => 'Wang','prenom' => 'Zhe','mail' => 'zhe.wang.imtlilledouai@gmail.com'),
  array('id' => '6','login' => 'oumaima.jeddifddsf','password' => 'sfLVNUrofdsf','nom' => 'fdsf','prenom' => 'fdsf','mail' => 'fdsf'),
  array('id' => '7','login' => 'hjb','password' => 'sfLVNUrogjghb','nom' => 'bkm ','prenom' => 'hjbhj','mail' => 'kgbk'),
  array('id' => '8','login' => 'test','password' => 'sfLVNUro','nom' => 'Wang','prenom' => 'Zhe','mail' => 'zhe.wang.imtlilledouai@gmail.com'),
  array('id' => '9','login' => 'alejandra.acevedo','password' => 'aleja123','nom' => 'aleja','prenom' => 'ace','mail' => 'urregoaleja10@hotmail.com'),
  array('id' => '10','login' => '1','password' => 'azerty','nom' => 'aze','prenom' => 'qsd','mail' => 'azerty@'),
  array('id' => '11','login' => 'de','password' => 'de','nom' => 'dewffre','prenom' => 'fef','mail' => 'de'),
  array('id' => '12','login' => 'kendal','password' => 'azerty','nom' => 'wang','prenom' => 'zhe','mail' => 'ghj'),
  array('id' => '13','login' => 'rwefe','password' => 'dsfe','nom' => 'dfewfe','prenom' => 'dwdweew','mail' => 'ddefaewfe'),
  array('id' => '14','login' => 'hh','password' => 'hh','nom' => 'hh','prenom' => 'hh','mail' => 'hh'),
  array('id' => '15','login' => 'luke','password' => 'luke','nom' => 'luke','prenom' => 'luke','mail' => 'luke@luke.sw'),
  array('id' => '16','login' => 'lalala','password' => 'lalalal','nom' => 'lalala','prenom' => 'lalala','mail' => 'lalala@lalala')
);

/* `oumaima_jeddi`.`userssssssss` */
$userssssssss = array(
  array('NOM' => 'Cousy','PRENOM' => 'Kendal','MAIL' => 'kendal.cousy@etu.imt-lille-douai.fr'),
  array('NOM' => 'jeddi','PRENOM' => 'Oumaima','MAIL' => 'oumaima.jeddi@etu.imt-lille-douai.fr'),
  array('NOM' => 'Wang','PRENOM' => 'Zhe','MAIL' => 'zhe.wang@etu.imt-lille-douai.fr')
);
