<form action="" method="POST">
	<fieldset>
		<legend>Ajout d'une catégorie</legend>

		<label for="nom">Nom : </label>
		<input type="text" name="nom" id="nom" placeholder="Cuisine">
		<br />
		<label for="description">Description :</label>
		<br />
		<textarea cols="30" rows="10" name="description" id="description"></textarea>
		<br />
		<input type="submit" value="Ajouter" name="submit">
	</fieldset>
</form>

<?php
// Test si on a reçu le bouton de soumission du formulaire
if (isset($_POST['submit'])) {
	$categorie = new Categorie();
	echo $categorie->save($_POST);
}
?>