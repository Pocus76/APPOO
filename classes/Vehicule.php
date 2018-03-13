<?php
class Vehicule
{
    public $masse;
    public $vitesse;

    public function calculerEnergieCinetique() : float
    {
        if($this -> masse >= 0 && $this -> vitesse >= 0)
        {
            $ec = 0.5*$this -> masse * $this -> vitesse ** 2;
            return $ec;
        }
        else return false;
    }
}