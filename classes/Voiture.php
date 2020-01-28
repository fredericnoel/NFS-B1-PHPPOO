<?php

class Voiture
{
    public $marque;
    public $modele;
    public $couleur;
    public $dimensions = [0, 0, 0];
    public $masse;
    public $vitesse = 0;

    public function __construct(string $mar, string $mod, string $cou, array $dim, int $mas)
    {
        $this->marque = $mar;
        $this->modele = $mod;
        $this->couleur = $cou;
        $this->dimensions = $dim;
        $this->masse = $mas;
    }


}