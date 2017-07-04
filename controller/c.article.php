<?php
include("/model/m.article.php");
	
class articleController
{
	public function getArticles()
	{
		$article = new articleModel;
		return $article->getArticles();
	}

	public function addArticle($contenu, $iduser, $idtheme, $image,$video)
	{
		$article = new articleModel;
		$article->addArticle($contenu, $iduser, $idtheme, $image,$video);
		//Faire la fonction
	}

	public function deleteArticleById($id)
	{
		$article = new articleModel;
		$article->deleteArticle($id);
		//Faire la fonction
	}

	public function getArticleById($id)
	{
		$article = new articleModel;
		$article->getArticleById($id);
		//Faire la fonction
	}

	public function updateCourse($contenu, $iduser, $video, $image)
	{
		$article = new articleModel;
		$article->updateArticle($contenu, $iduser, $video, $image);
		//Faire la fonction
	}
}

