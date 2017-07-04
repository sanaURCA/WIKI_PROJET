<?php
include("/model/m.article.php");
	
class courseController
{
	public function getArticles()
	{
		$article = new articleModel;
		return $article->getArticles();
	}

	public function addArticle($contenu, $iduser, $idtheme, $image,$video)
	{
		$article = new articleModel;
		$article->addCourse($contenu, $iduser, $idtheme, $image,$video);
		//Faire la fonction
	}

	public function deleteArticleById($id)
	{
		$article = new articleModel;
		$article->deleteCourse($id);
		//Faire la fonction
	}

	public function getCourseById($id)
	{
		$article = new articleModel;
		$article->getCourseById($id);
		//Faire la fonction
	}

	public function updateCourse($contenu, $iduser, $video, $image)
	{
		$article = new articleModel;
		$article->updateCourse($contenu, $iduser, $video, $image);
		//Faire la fonction
	}
}

