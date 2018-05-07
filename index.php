<?php
require_once "./Boisson.php";
require_once "./Biere.php";
$picole = new Boisson();
$picole->nom = "Pastaga";
var_dump($picole->recupTout());

