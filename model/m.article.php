<?php
include_once("db/connexion.php");

class articleModel
{
	/*Affiche toute les associations*/
	public function getArticles()
	{
		$sql="SELECT * FROM ARTICLE ORDER BY 1";
		$stmt = myPDO::donneInstance()->prepare($sql);
		$stmt->execute();
		$ligne = $stmt->fetchAll();
		return $ligne;
	}

	public function addArticle($contenu, $iduser, $idtheme, $image,$video)
	{
		$sql="INSERT INTO ARTICLE (CONTENU, ID_USER, idtheme, IMAGE, VIDEO) VALUES ('".$contenu."', ".$iduser.", '".$idtheme."', '".$image."','".$video"')";
		$stmt = myPDO::donneInstance()->prepare($sql);
		$stmt->execute();
	}

	public function deleteArticle($id)
	{
		$sql="DELETE FROM ARTICLE WHERE ID_ARTICLE=".$id;
		$stmt = myPDO::donneInstance()->prepare($sql);
		$stmt->execute();
		//Faire la fonction
	}

	public function getArticleByIdUser($id)
	{
		$sql="SELECT * FROM ARTICLE WHERE ID_USER=".$id;
		$stmt = myPDO::donneInstance()->prepare($sql);
		$stmt->execute();
		$ligne = $stmt->fetchAll();
		return $ligne;
		//Faire la fonction
	}

	public function updateArticle($contenu, $iduser, $video, $image)
	{
		$sql="UPDATE ARTICLE  SET CONTENU ='".$contenu."', VIDEO='".$video."', IMAGE='".$image."' WHERE ID_USER ='".$iduser."' ";
		$stmt = myPDO::donneInstance()->prepare($sql);
		$stmt->execute();
		//Faire la fonction
	}
}
