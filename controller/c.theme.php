<?php
include("/model/m.theme.php");
	
class themeController
{
	public function getThematiques()
	{
		$theme = new thematiqueModel;
		return $theme->getThematiques();
	}

	public function addThemtique($type, $name, $cap)
	{
		$theme = new thematiqueModel;
		$theme->addThemtique($type, $name, $cap);
		//Faire la fonction
	}

	public function deleteThematiqueById($id)
	{
		$theme = new thematiqueModel;
		$theme->deleteThematique($id);
		//Faire la fonction
	}

	public function getThematiqueById($id)
	{
		$theme = new thematiqueModel;
		return $theme->getThematiqueById($id);
		//Faire la fonction
	}

	public function updateThematique($theme)
	{
		$theme = new thematiqueModel;
		$theme->updateThematique($theme);
		//Faire la fonction
	}
}

