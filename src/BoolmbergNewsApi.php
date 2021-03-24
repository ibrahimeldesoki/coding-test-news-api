<?php
namespace App;

use App\BoolmbergNews\BoolmbergNews;
class BoolmbergNewsApi implements NewsPaperInterface
{
    public function News()
    {
        $news = [];
		foreach ($this->getProvider()->getNewsFromAPI()['articles'] as $row) {
			$news[] = [
				'title' => $row['title'],
				'author' => $row['author'],
				'image' => $row['urlToImage'],
				'publish_date' => $row['publishedAt'],
				'source' => $row['source']['name'],
				'url' => $row['url'],
			];
		}
        return $news;
    }
    public function getProvider()
    {
        return new BoolmbergNews;
    }
}
