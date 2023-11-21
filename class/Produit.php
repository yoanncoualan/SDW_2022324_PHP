<?php

class Produit extends BDD
{
	private $id;
	private $nom;
	private $description;
	private $categorie_id;

	public function setId(int $id): self
	{
		$this->id = $id;
		return $this;
	}
	public function getId(): int
	{
		return $this->id;
	}

	public function setNom(string $nom): self
	{
		$this->nom = $nom;
		return $this;
	}
	public function getNom(): string
	{
		return $this->nom;
	}

	public function setDescription(string $desc): self
	{
		$this->description = $desc;
		return $this;
	}
	public function getDescription(): string
	{
		return $this->description;
	}

	public function setCategorieId(int $id): self
	{
		$this->categorie_id = $id;
		return $this;
	}
	public function getCategorieId(): int
	{
		return $this->categorie_id;
	}

	public function findAll()
	{
		// On récupère la connexion et on lance une requete
		$requete = $this->getConnexion()->query('SELECT * FROM produits');
		// Génère un tableau PHP à partir du résultat de requete
		$produits = $requete->fetchAll();

		return $produits;
	}
}
