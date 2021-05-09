<?php

const DIFFICULTY_EASY   = 'facile';
const DIFFICULTY_HARD   = 'difficile';
const DIFFICULTY_NORMAL = 'normal';


// Classe représentant le jeu en lui-même

/*
 * Cette classe est l'élément central du programme : elle manipule notamment le joueur
 * et le monstre pour qu'ils se battent jusqu'à la mort. Elle doit les instancier,
 * les initialiser, les "faire jouer" et obtenir des résultats : une liste de messages
 * générés pendant le jeu et l'image du vainqueur final.
 */

 class Game
 {
    public $playerName;
    public $player;
    public $monster;
    public $playerType;
    public $difficulty;

    public function __construct( $name, $playerType, $difficulty )
    {
        $this->difficulty = $difficulty;
        $this->playerType = $playerType;
        $this->playerName = $name;
        
        $playerHP = rand(200,250);
        
        if( $playerType == 'guerrier')
        {
            $this->player = new Fighter($name, $playerHP);
        }
        else if( $playerType == 'magicien')
        {
            $this->player = new Wizard($name, $playerHP);
        }
        else 
        {
            $this->player = new Angel($name, $playerHP);
        }

        

        if( $difficulty == 'facile')
        {
            $this->monster = new BoneDragon();
        }
        else if ( $difficulty == 'normal')
        {
            $this->monster = new GreenDragon();
        }
        else 
        {
            $monsterHP = rand(250,300);
            $this->monster = new BlackDragon();
        }
        
    }

    public function run()
    {
        // on joue tant que les 2 joueurs sont vivants
        while( $this->monster->hp > 0 && $this->player->hp > 0 )
        {
            // gerer un tour

            $intiative = rand(0,1);

            // joueur attaque
            if( $intiative == 0)
            {
                $damage = $this->player->getDamage();
                $this->monster->takeDamage($damage);

                echo '<p> Le joueur attaque le '.$this->monster->name.' pour '.$damage .'. HP dragon '.$this->monster->hp.' </p>';
            }
            else 
            {
                $damage = $this->monster->getDamage();
                $this->player->takeDamage($damage);

                echo '<p> Le '.$this->monster->name.' attaque le joueur pour '.$damage .'. HP player '.$this->player->hp.' </p>';
            }
        }

        $this->displayWinner();
    }

    private function displayWinner()
    {
        if( $this->player->hp <= 0 )
        {
            $this->monster->displayImage();
        }
        else 
        {
            $this->player->displayImage();
        }
    }
 }

