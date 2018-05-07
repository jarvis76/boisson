<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 07/05/2018
 * Time: 13:52
 */


class Boisson
{
    private $type;
    private $titrage;
    private $nom;
    private $typeConditionnement;
    private $dateLimiteMiseEnVente;
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
    public function recupTout() {
        return get_object_vars($this);
    }
}

