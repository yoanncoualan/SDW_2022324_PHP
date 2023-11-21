<?php
// une_categorie.php

require 'class/BDD.php';
require 'class/Categorie.php';

include 'menu.html';

if (isset($_GET['id'])) {

	$categorie = new Categorie();
	$une_categorie = $categorie->findOneById($_GET['id']);

	if ($une_categorie == false) {
		echo '<p>Catégorie introuvable</p>';
	} else {
		echo '<h1>' . $une_categorie['nom'] . '</h1>';
		echo '<p>' . $une_categorie['description'] . '</p>';

		$update = true;
		include 'form_categorie.php';

		echo '<p><a href="suppr_categorie.php?id=' . $une_categorie['id'] . '">Supprimer</a></p>';
	}
} else {
	echo '<p>Aucune catégorie reçue</p>';
}
