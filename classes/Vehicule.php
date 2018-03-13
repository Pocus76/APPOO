
<?php
/**
 * Created by PhpStorm.
 * User: frede
 * Date: 13/03/2018
 * Time: 12:31
 */

class Vehicule
{
    public $masse;
    public $vitesseInstantanee;

    public function calculerEnergieCinetique() : float
    {
        if ($this -> masse >= 0 && $this -> vitesseInstantanee >= 0) {
            return 0.5 * $this -> masse * $this -> vitesseInstantanee ** 2;
        }
        else {
            return false;
        }

    }

}