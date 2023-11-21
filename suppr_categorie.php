<?php

require 'class/BDD.php';
require 'class/Categorie.php';

include 'menu.html';

if (isset($_GET['id'])) {
	$categorie = new Categorie();
	echo $categorie->delete($_GET['id']);
}
