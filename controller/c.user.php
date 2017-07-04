<?php
include("/model/m.user.php");
	
class userController
{
	public function getUsers()
	{
		$userMo = new userModel;
		return $userMo->getUsers();
	}

	public function addUser()
	{
		$userMo = new userModel;
		$userMo->addUser();
		//Faire la fonction
	}

	public function deleteUserById($id)
	{
		$userMo = new userModel;
		$userMo->deleteUser();
		//Faire la fonction
	}

	public function getUserById($id)
	{
		$userMo = new userModel;
		return $userMo->getUserById($id);
		//Faire la fonction
	}

	public function updateUser(/*Mettre les paramètres*/)
	{
		$userMo = new userModel;
		$userMo->updateUser();
		//Faire la fonction
	}
}

