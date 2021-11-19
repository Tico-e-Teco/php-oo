<?php

require_once "produto.php";
require_once "fabricante.php";


// TODO: Metodo mágico __GET, __SET
$fabricante = new Fabricante();
$fabricante->id = 1;
$fabricante->nome = "Puma";

$p1 = new Produto(2000, "Meião", $fabricante);
//$p1->fabricante = $fabricante;


$p2 = new Produto();
$p2->setFabricante($fabricante);

//echo $p1->getId();
print_r($p1);
print_r($p2);
//var_dump($p1);
//
// var_dump($p2);

// safe null