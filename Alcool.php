<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 07/05/2018
 * Time: 15:28
 */

trait Alcool
{
    protected $volumeBoisson;
    protected $volumeAlcool;
    protected $titrage;
    public function calculerVolumeAlcool($titrage, $volume){
        $this->titrage = $titrage;
        $this->volumeBoisson = $volume;
        $this->volumeAlcool = $this->volumeBoisson / $this->titrage * 2;
        return $this->volumeAlcool;
    }
}