<?php

class News
{
	
	public static function getNewsItemById($id)
	{
		
	}

	public static function getNewsList()
	{
		
		
		$newsList = array();
		
		$db = Db::getConnection();
		
		$result = $db->query('SELECT id, title, date, short_content FROM news ORDER BY date DESC LIMIT 10');
		
		$i = 0;
		while($row = $result->fetch(PDO::FETCH_ASSOC)){
			$newsList[$i] = $row;
			$i++;
		}
		return $newsList;
	}	
}

?>