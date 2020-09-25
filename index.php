<?php
session_start();

require('controller/controller.php');

if (isset($_GET['action'])) {
  
  
    if ($_GET['action'] == 'listC') { 
            listC();
    }
    elseif ($_GET['action'] == 'chartC') {
        if (isset($_GET['id']) && $_GET['id'] >= 0) {
            chartC($_GET['id']);
        }
        else {
            echo 'Erreur : aucun identifiant du lvl envoyé';
        }
    }
}
//en l'absence d'insctruction envoie vers la page de login
else {

    listC();
}

?>