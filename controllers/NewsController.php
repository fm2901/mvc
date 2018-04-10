<?php

include_once ROOT. '/models/News.php';

class NewsController {
	
	public function actionIndex()
		{
			$newsList = array();
			$newsList = News::getNewsList();
			echo "<pre>";
			print_r($newsList);
			return true;
		}

	public function actionView($id)
		{
			if($id){
				$newsItem = News::getNewsItemById($id);
				print_r($newsItem);
			}
			return true;
		}	
}

?>