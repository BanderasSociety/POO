<?php

const TYPE_ANGEL   = 'ange';
const TYPE_FIGHTER = 'guerrier';
const TYPE_WIZARD  = 'magicien';


// Classe représentant un joueur humain

class Player 
{
    public $hp;
    public $name;

    public function __construct( $name, $hp )
    {
        $this->name = $name;
        $this->hp = $hp;
    }

    public function takeDamage( $damage )
    {
        $this->hp -= $damage;
    }

    public function getDamage()
    {
        return rand(35,55);
    }

    public function displayImage()
    {
        echo "<img src='www/images/angel.png' alt='angel'>";
    }
}

class Fighter extends Player
{
    // redefinition de getDamage
    public function getDamage()
    {
        return rand(25,45);
    }

    public function displayImage()
    {
        echo "<img src='www/images/warrior.png' alt='fighter'>";
    }
}

class Angel extends Player
{
    // redefinition de getDamage
    public function getDamage()
    {
        return rand(35,45);
    }

    public function displayImage()
    {
        echo "<img src='www/images/angel.png' alt='angel'>";
    }
}

class Wizard extends Player
{
    // redefinition de getDamage
    public function getDamage()
    {
        return rand(30,50);
    }

    public function displayImage()
    {
        echo "<img src='www/images/wizard.png' alt='wizard'>";
    }
}