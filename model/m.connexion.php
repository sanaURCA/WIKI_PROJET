<?php
include("/db/connexion.php");

class connexionModel
{
	/*Affiche toute les associations*/
	public function isUserCorrect($login, $pass)
	{
		$sql="SELECT * FROM utilisateur WHERE LOGIN='".$login."'";
		$stmt = myPDO::donneInstance()->prepare($sql);
		$stmt->execute();
		$user = $stmt->fetch(PDO::FETCH_ASSOC);
		if($user["PASSWORD"]==sha1($pass))
		{
			session_start();
	 		if (!isset($_SESSION['authUsername']) && !isset($_SESSION['connect']) && !isset($_SESSION['authType']))
	 		{
	 			$_SESSION['authUsername'] = $user["LOGIN"];
	 			$_SESSION['authType'] = $user["TYPEUSER"];
	 			if($user["TYPEUSER"]=="partenaire" || $user["TYPEUSER"]=="association")
	 				$_SESSION['authId'] = $user["IDACTEUR"];

	 			$auth = array();
	 			$auth["assos"] = $user["AUTHASSOS"];
	 			$auth["parts"] = $user["AUTHPARTENAIRES"];
	 			$auth["stats"] = $user["AUTHSTATS"];
	 			$auth["events"] = $user["AUTHEVENTS"];
	 			$auth["pubs"] = $user["AUTHPUBS"];
	 			$auth["offres"] = $user["AUTHOFFRES"];
	 			$auth["ip"] = $user["AUTHIP"];
	 			$auth["services"] = $user["AUTHSERVICES"];
	 			$auth["news"] = $user["AUTHNEWS"];

	 			$_SESSION['authorizations'] = $auth;
	 			$_SESSION['connect'] = "true";
	 		}
		}
	}

	public function getTypeUserByLogin($login)
	{
		$sql="SELECT * FROM utilisateur WHERE LOGIN='".$login."'";
		$stmt = myPDO::donneInstance()->prepare($sql);
		$stmt->execute();
		$user = $stmt->fetch(PDO::FETCH_ASSOC);

		return $user;
	}
}
