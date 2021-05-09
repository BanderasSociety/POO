<?php


/*
 * Classe représentant tout type de monstre.
 * 
 * Elle n'est jamais directement instanciée, il s'agit d'une classe abstraite.
 * Une classe abstraite n'est pas entièrement implémentée, il faut passer par une
 * classe enfant qui sera plus concrète.
 */

abstract class Monster
{
    public $name;
    public $hp;

    public function __construct()
    {
        $this->hp = 0;
        $this->name = 'Dragon';
    }

    public function takeDamage($damage)
    {
        $this->hp -= $damage;
    }

    abstract public function getDamage();

    abstract public function displayImage();
}

class BoneDragon extends Monster
{

    public function __construct()
    {
        $this->hp = rand(200, 250);
        $this->name = 'Dragon d os';
    }

    public function getDamage()
    {
        return rand(35, 55);
    }

    public function displayImage()
    {
        echo "<img src='www/images/bone-dragon.png' alt='angel'>";
    }
}

class GreenDragon extends Monster
{
    public function __construct()
    {
        $this->hp = rand(225, 275);
        $this->name = 'dragon vert';
    }

    public function getDamage()
    {
        return rand(48, 60);
    }

    public function displayImage()
    {
        echo "<img src='www/images/green-dragon.png' alt='angel'>";
    }
}

class BlackDragon extends Monster
{
    public function __construct()
    {
        $this->hp = rand(250, 300);
        $this->name = 'dragon noir';
    }

    public function getDamage()
    {
        return rand(45, 63);
    }

    public function displayImage()
    {
        echo "<img src='www/images/black-dragon.png' alt='angel'>";
    }
}
