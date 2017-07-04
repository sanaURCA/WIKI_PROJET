<?php
include_once("/db/connexion.php");

class thematiqueModel
{
	public function getThematiques()
	{
		$sql="SELECT * FROM thematique ORDER BY 1";
		$stmt = myPDO::donneInstance()->prepare($sql);
		$stmt->execute();
		$ligne = $stmt->fetchAll();
		return $ligne;
	}

	public function addThematique($theme)
	{
		$sql="INSERT INTO thematique(theme) VALUES($theme)";
		$stmt = myPDO::donneInstance()->prepare($sql);
		$stmt->execute();
	}

	public function deleteThematique($id)
	{
		$sql="DELETE FROM thematique WHERE id_theme=$id";
		$stmt = myPDO::donneInstance()->prepare($sql);
		$stmt->execute();
	}

	public function getThematiqueById($id)
	{
		$sql="SELECT theme FROM thematique WHERE id_theme=$id";
		$stmt = myPDO::donneInstance()->prepare($sql);
		$stmt->execute();
		$room = $stmt->fetchAll();
		return $room
	}

	public function updateThematique($theme)
	{
		$sql="UPDATE FROM thematique SET theme='".$theme."' ";
		$stmt = myPDO::donneInstance()->prepare($sql);
		$stmt->execute();
	}
}
