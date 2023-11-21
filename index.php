<?php

require 'class/BDD.php';

require 'class/Categorie.php';
require 'class/Produit.php';

echo '<h2>Catégories</h2>';

include 'form_categorie.php';

$categorie = new Categorie();
$categories = $categorie->findAll();

foreach ($categories as $une_categorie) {
	echo '<p><a href="une_categorie.php?id=' . $une_categorie['id'] . '">' . $une_categorie['nom'] . '</a></p>';
}

echo '<h2>Produits</h2>';

$produit = new Produit();
$liste_produits = $produit->findAll();

if (!empty($liste_produits)) {
	foreach ($liste_produits as $un_produit) {
		echo '<p>' . $un_produit['nom'] . '</p>';
	}
} else {
	echo '<p>Il n\'y a aucun produit</p>';
}
