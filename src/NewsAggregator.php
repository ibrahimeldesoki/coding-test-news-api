<?php
namespace App;

use App\NewsPaperInterface;
use Exception;

class NewsAggregator
{
    private $newspapers = [];
    public function addNewsPaper(NewsPaperInterface $newsPapers)
    {
        $this->newspapers[] = $newsPapers;
    }
    public function get()
    {
        $news =[];
        foreach ($this->newspapers as $newsPaper) {
            try {
                $news[] = $newsPaper->News();
            } catch (Exception $e) {
            }
        }
        return $news;
    }
}
