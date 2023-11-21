<?php

// Importe la class Categorie
require 'class/BDD.php';
require 'class/Categorie.php';

$categorie = new Categorie();
$categories = $categorie->findAll();

foreach ($categories as $une_categorie) {
	echo '<p>' . $une_categorie['nom'] . '</p>';
}
