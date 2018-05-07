<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 07/05/2018
 * Time: 14:25
 */

require_once "./Boisson.php";
$picole = new Boisson();
$picole->nom = "Pastaga";
var_dump($picole->recupTout());

