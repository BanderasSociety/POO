<?php   

Class Personnage{

    protected $vie = 20;

    protected $atk = 20;

    protected $nom;

    public function __construct($nom){

        $this->nom = $nom;

    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        return $this->nom;
    }

    public function getVie(){
        return $this->vie;
    }
    public function getAtk(){
        return $this->atk;
    }
    public function regenerer($vie = null){

        if(is_null($vie)){
            $this->vie = 100;
        }else{
            $this->vie += $vie;
        }
    }

    public function mort(){
        
        return $this->vie <= 0;
        }

    protected function empecher_negatif(){
        
        if($this->vie <= 0){
            $this->vie = 0;
        }
    }

    public function attaque($cible){

        $cible->vie -= $this->atk;
        $cible->empecher_negatif();
    }
    
}