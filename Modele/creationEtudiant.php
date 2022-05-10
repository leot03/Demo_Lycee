<?php

require_once '../../Controleur/Controleur.php';

class ListEtudiant extends Modele {

    public function obtenirListeEtudiant() {
        $requete = $this->_bdd->query("set lc_time_names = 'fr_FR'")
                or die(print_r($requete->errorInfo()));

        $requete = $this->_bdd->query('Select nom, prenom, login, mdp from Utilisateurs') or die(print_r($requete->errorInfo()));

        echo "<table id='liste-etudiants' class='table table-borderless table-responsive card-1 p-4'>";
        echo "<tr class='border-bottom'> <th><span class='ml-2'>Nom</span></th>"
        . "<th><span class='ml-2'>Prenom</span></th> <th><span class='ml-2'>Login</span></th> "
        . "<th><span class='ml-2'>Mot de passe</span></th>";

        while ($ligne = $requete->fetch()) {
            $nom = $ligne["nom"];
            $prenom = $ligne["prenom"];
            $login = $ligne["login"];
            $mdp = $ligne["mdp"];

            echo '<tr> <td>' . $nom . '</td> <td>' . $prenom . '</td> <td>' . $login . '</td> <td>' . $mdp . '</td> </tr>';
        }

        echo "</table>";
        $requete->closeCursor();
    }

    public function obtenirListePromotion() {
        $requete = $this->_bdd->query("set lc_time_names = 'fr_FR'")
                or die(print_r($requete->errorInfo()));

        $requete = $this->_bdd->query('Select nom from Promotions') or die(print_r($requete->errorInfo()));

        echo "<table id='liste-etudiants' class='table table-borderless table-responsive card-1 p-4'>";
        echo "<tr class='border-bottom'> <th><span class='ml-2'>Nom</span></th>"
        . "<th><span class='ml-2'>Prenom</span></th> <th><span class='ml-2'>Login</span></th> "
        . "<th><span class='ml-2'>Mot de passe</span></th>";

        while ($ligne = $requete->fetch()) {
            $nom = $ligne["nom"];
            $prenom = $ligne["prenom"];
            $login = $ligne["login"];
            $mdp = $ligne["mdp"];

            echo '<tr> <td>' . $nom . '</td> <td>' . $prenom . '</td> <td>' . $login . '</td> <td>' . $mdp . '</td> </tr>';
        }

        echo "</table>";
        $requete->closeCursor();
    }
}