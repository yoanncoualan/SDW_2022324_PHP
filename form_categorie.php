<?php
if (isset($update) && $update == true) {
	$isUpdate = true;
	$legend = 'Mettre à jour la catégorie';
	$submit = 'Mettre à jour';
} else {
	$isUpdate = false;
	$legend = 'Ajout d\'une catégorie';
	$submit = 'Ajouter';
}
?>

<form action="" method="POST">
	<fieldset>
		<legend>
			<?= $legend; ?>
		</legend>

		<label for="nom">Nom : </label>
		<input type="text" name="nom" id="nom" placeholder="Cuisine" <?php
																		if ($isUpdate == true) {
																			echo 'value="' . $une_categorie['nom'] . '"';
																		}
																		?>>
		<br />
		<label for="description">Description :</label>
		<br />
		<textarea cols="30" rows="10" name="description" id="description"><?php
																			if ($isUpdate == true) {
																				echo $une_categorie['description'];
																			}
																			?></textarea>
		<br />
		<input type="submit" value="<?= $submit; ?>" name="submit">
	</fieldset>
</form>

<?php
// Test si on a reçu le bouton de soumission du formulaire
if (isset($_POST['submit'])) {
	$categorie = new Categorie();

	if ($isUpdate == true) {
		echo $categorie->update($_POST, $_GET['id']);
	} else {
		echo $categorie->save($_POST);
	}
}
?>