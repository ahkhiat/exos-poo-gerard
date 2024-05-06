<?php


abstract class Forme
{
    private $longueur;
    private $largeur;
    private $area;

    function __construct($longueur, $largeur)
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function area()
    {
        $area = ($this->longueur * $this->largeur);
        $this->area = $area;

        return $this->area;
    }

    public function afficheArea()
    {
        echo $this->area();
    }
}

class Carre extends Forme
{
    public function __construct($cote)
    {
        parent::__construct($cote, $cote);
    }
}

class Rectangle extends Forme 
{
    public function __construct($longueur, $largeur)
    {
        parent::__construct($longueur, $largeur);
    }
}
