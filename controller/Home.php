<?php

/* Class Home -> Show  Homepage
*/

class Home
{
	public function showHome()
	{

		/*$manager = new PostManager();
		$Posts = $manager->  findPost() ;*/

		$myView = new View('home');
		$myView->render();
	}

	/*public function showPost()
	{

	}

	public function showComments()
	{

	}*/
}
