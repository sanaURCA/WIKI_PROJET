<?php
include_once("/db/connexion.php");

class userModel
{
	/*Affiche toute les associations*/
	public function getUsers()
	{
		$sql="SELECT * FROM utilisateur ORDER BY 1";
		$stmt = myPDO::donneInstance()->prepare($sql);
		$stmt->execute();
		$ligne = $stmt->fetchAll();
		return $ligne;
	}

	public function addUser()
	{
		//Faire la fonction
	}

	public function deleteUser($id)
	{
		//Faire la fonction
	}

	public function getUserById($id)
	{
		//Faire la fonction
	}

	public function updateUser(/*Mettre les paramètres*/)
	{
		//Faire la fonction
	}
}
