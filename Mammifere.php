<?php

class Mammifere
{
    private $nom;
    private $age;

    function __construct($nom, $age)
    {
        $this->nom = $nom;
        $this->age = $age;
    }

    function affiche()
    {
        echo $this->nom.', '.$this->age.' ans';
    }
}


class Chien extends Mammifere
{
    function aboyer()
    {
        echo 'wouafff';
    }
}