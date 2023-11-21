<?php
// une_categorie.php

require 'class/BDD.php';
require 'class/Categorie.php';

if (isset($_GET['id'])) {
	$categorie = new Categorie();
	$produit = $categorie->findOneById($_GET['id']);

	if ($produit == false) {
		echo '<p>Produit introuvable</p>';
	} else {
		var_dump($produit);
	}
} else {
	echo '<p>Aucune catégorie reçue</p>';
}
