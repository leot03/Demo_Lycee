<?php

require_once '../Modele/creationEtudiant.php';

$unePromo = new ModeleEtudiant();

if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'GET') {
    $action = filter_input(INPUT_GET, "action");
    switch ($action) {
        case 'remplirEtudiant':       
            $promotion = filter_input(INPUT_GET, 'promotion');
            if (isset($promotion)) {
                echo 'une promo';
                echo $unePromo->Etudiant($promotion);
            }
            break;
    }
}