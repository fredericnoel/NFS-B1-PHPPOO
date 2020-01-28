<?php

abstract class Animal
{
    protected $longueur;
    protected $largeur;
    protected $hauteur;
    protected $masse;
    protected $couleurDominante;
    protected $genre;
    protected $locomotion;
    protected $nom;
    protected $appareilRespiratoire = true;
    protected $appareilDigestif = true;

    protected function seNourrir()
    {
        echo "Je bouffe";
    }
}