<?php
include("/model/m.connexion.php");
	
class connexionController
{
	public function isUserCorrect($login, $pass)
	{
		$connexionMo = new connexionModel;
		$connexionMo->isUserCorrect($login, $pass);
	}

	public function getTypeUserByLogin($login)
	{
		$connexionMo = new connexionModel;
		return $connexionMo->getTypeUserByLogin($login);
	}
}

