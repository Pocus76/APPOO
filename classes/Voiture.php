<?php
class Voiture
{
    public $nbRoues;
    public $couleur;
    public $masse;
    public $carburant;
    public $vitesse;

    public function calculerEnergieCinetique()
    {
        if($this -> masse >= 0 && $this -> vitesse != 0)
        {
            $ec = 0.5*$this -> masse * $this -> vitesse ** 2;
            return $ec;
        }
        else return false;
    }
}

