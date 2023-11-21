<?php

// Création de la class
class Categorie extends BDD
{
	// Création de variables accessibles que dans la class
	private $id;
	private $nom;
	private $description;

	// Création du setter d'id
	// 'int $id' signifie que $id doit être de type integer
	// ': self' signifie que la fonction va retourner toute la class
	public function setId(int $id): self
	{
		$this->id = $id;
		return $this;
	}

	// ': int' signifie que la fonction va retourner un integer
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

	public function findAll()
	{
		// On récupère la connexion et on lance une requete
		$requete = $this->getConnexion()->query('SELECT * FROM categories');
		// Génère un tableau PHP à partir du résultat de requete
		$categories = $requete->fetchAll();

		return $categories;
	}
}