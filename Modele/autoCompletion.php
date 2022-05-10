<?php

require_once '../../Controleur/Controleur.php';

class ListEtudiant extends Modele {

    public function obtenirListePromotion() {
        $requete = $this->_bdd->query("set lc_time_names = 'fr_FR'")
                or die(print_r($requete->errorInfo()));

        $term = $_GET['term'];
        
        $requete = $this->_bdd->query('Select nom from Promotions') or die(print_r($requete->errorInfo()));
        $requete->execute(array('term' => '%'.$term.'%'));
 
        $array = array();

        while($donnee = $requete->fetch()) 
        {
            array_push($array, $donnee['interet']); 
        }

        echo json_encode($array); 
    }
}