<?php

// Chargement des classes dépendantes

include 'classes/Game.php';
include 'classes/Player.php';
include 'classes/Monster.php';

// A-t'on reçu un formulaire ?
if(empty($_POST) == true) {
    // Non, affichage du menu du jeu (formulaire start)
    require 'templates/menu.phtml';
}
else {
    // Oui, exécution du jeu
    
    $game = new Game( $_POST['player-name'], $_POST['player-type'], $_POST['difficulty'] );

    // on ne peut pas instancier une classe abstraite
    //$monster = new Monster();

    // Création du jeu avec les données du formulaire

    // Exécution du jeu, récupération de la liste des messages

    // Récupération de l'image du vainqueur

    require 'templates/game-start.phtml';
} 

/*

1 classe 1 fonctionnalité
1 methode : 1 mission
*/