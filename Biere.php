<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 07/05/2018
 * Time: 15:18
 */

class Biere extends Boisson
{
    use Alcool;
    private $typeHoublon;
    private $typeBiere; //Blonde, brune, ambrée, rousse, blanche, à poils bleus
    public function __get($propriete) {
        if (property_exists($this, $propriete)) {
            return $this->$propriete;
        }
    }
    public function __set($propriete, $valeur) {
        if (property_exists($this, $propriete)) {
            $this->$propriete = $valeur;
        }
    }
    public function calculerVolumeAlcool($titrage, $volume)
    {
        return $this->volumeAlcool;
    }
}