<?php

class Personne {
    private $nom;
    private $age;

    function __construct ($nom, $age) 
    {
        $this->nom = $nom;
        $this->age = $age;
    }
    function get_infos() 
    {
        echo 'La personne s\'appelle '. $this->nom .' et a '.$this->age.' ans.';
    }
}