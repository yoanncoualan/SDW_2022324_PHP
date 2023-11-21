<?php
// une_categorie.php

require 'class/BDD.php';
require 'class/Categorie.php';

if (isset($_GET['id'])) {

	$categorie = new Categorie();
	$produit = $categorie->findOneById($_GET['id']);

	$update = true;
	include 'form_categorie.php';

	if ($produit == false) {
		echo '<p>Produit introuvable</p>';
	} else {
		echo '<h1>' . $produit['nom'] . '</h1>';
		echo '<p>' . $produit['description'] . '</p>';
	}
} else {
	echo '<p>Aucune catégorie reçue</p>';
}
