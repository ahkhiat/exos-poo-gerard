<?php

class CompteBancaire 
{
    private $titulaire;
    private $solde;

    function __construct($titulaire, $solde)
    {
        $this->titulaire = $titulaire;
        $this->solde = $solde;
    }

    function affiche() 
    {
        echo 'le solde du compte de <strong>'.$this->titulaire.'</strong> est de <strong>'.$this->solde. '</strong> €';
    }
    
    function afficheSoldeInsuffisant()
    {
        echo 'Votre solde est insuffisant !';
    }

    function crediter($montant)
    {
        $this->solde += $montant;
        $this->affiche();
    }

    function debiter($montant)
    {
        if($montant > $this->solde){
            $this->afficheSoldeInsuffisant();
        } else {
            $this->solde -= $montant;
            $this->affiche();
        }
    }

}