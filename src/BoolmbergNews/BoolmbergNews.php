<?php

namespace App\BoolmbergNews;

use RuntimeException;

class BoolmbergNews
{
	private $data = [];

	public function __construct()
	{
		$path = __DIR__.DIRECTORY_SEPARATOR.'boolmbergNews.json';
		if(! file_exists($path)) {
			throw new RuntimeException("File data is not found.");
		}
		
		$this->data = json_decode(file_get_contents($path), true);
	}

	public function getNewsFromAPI()
	{
		return $this->data;
	}
}