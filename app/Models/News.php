<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\isNull;

class News
{
    private Categories $categories;

    private array $news = [
        1 => [
            'id' => 1,
            'title' => 'News 1',
            'text' => 'Some sport news 1',
            'categoryId' => '1',
            'isPrivate' => True,
        ],
        [
            'id' => 2,
            'title' => 'News 2',
            'text' => 'Some sport news 2',
            'categoryId' => '1',
            'isPrivate' => False,
        ],
        [
            'id' => 3,
            'title' => 'News 3',
            'text' => 'Some sport news 3',
            'categoryId' => '1',
            'isPrivate' => False,
        ],
        [
            'id' => 4,
            'title' => 'News 4',
            'text' => 'Some sport news 4',
            'categoryId' => '1',
            'isPrivate' => True,
        ],
        [
            'id' => 5,
            'title' => 'News 5',
            'text' => 'Some sport news 5',
            'categoryId' => '1',
            'isPrivate' => False,
        ],
        [
            'id' => 6,
            'title' => 'News 6',
            'text' => 'Some politic news 6',
            'categoryId' => '2',
            'isPrivate' => True,
        ],
        [
            'id' => 7,
            'title' => 'News 7',
            'text' => 'Some politic news 7',
            'categoryId' => '2',
            'isPrivate' => True,
        ],
        [
            'id' => 8,
            'title' => 'News 8',
            'text' => 'Some politic news 8',
            'categoryId' => '2',
            'isPrivate' => True,
        ],
        [
            'id' => 9,
            'title' => 'News 9',
            'text' => 'Some politic news 9',
            'categoryId' => '2',
            'isPrivate' => False,
        ],
        [
            'id' => 10,
            'title' => 'News 10',
            'text' => 'Some politic news 10',
            'categoryId' => '2',
            'isPrivate' => False,
        ],
        [
            'id' => 11,
            'title' => 'News 11',
            'text' => 'Some music news 11',
            'categoryId' => '3',
            'isPrivate' => True,
        ],
        [
            'id' => 12,
            'title' => 'News 12',
            'text' => 'Some music news 12',
            'categoryId' => '3',
            'isPrivate' => False,
        ],
        [
            'id' => 13,
            'title' => 'News 13',
            'text' => 'Some music news 13',
            'categoryId' => '3',
            'isPrivate' => False,
        ],
        [
            'id' => 14,
            'title' => 'News 14',
            'text' => 'Some music news 14',
            'categoryId' => '3',
            'isPrivate' => True,
        ],
        [
            'id' => 15,
            'title' => 'News 15',
            'text' => 'Some music news 15',
            'categoryId' => '3',
            'isPrivate' => False,
        ],
        [
            'id' => 16,
            'title' => 'News 16',
            'text' => 'Some movie news 16',
            'categoryId' => '4',
            'isPrivate' => True,
        ],
        [
            'id' => 17,
            'title' => 'News 17',
            'text' => 'Some movie news 17',
            'categoryId' => '4',
            'isPrivate' => False,
        ],
        [
            'id' => 18,
            'title' => 'News 18',
            'text' => 'Some movie news 18',
            'categoryId' => '4',
            'isPrivate' => False,
        ],
        [
            'id' => 19,
            'title' => 'News 19',
            'text' => 'Some movie news 19',
            'categoryId' => '4',
            'isPrivate' => True,
        ],
        [
            'id' => 20,
            'title' => 'News 20',
            'text' => 'Some movie news 20',
            'categoryId' => '4',
            'isPrivate' => True,
        ],
        [
            'id' => 21,
            'title' => 'News 21',
            'text' => 'Some economy news 21',
            'categoryId' => '5',
            'isPrivate' => False,
        ],
        [
            'id' => 22,
            'title' => 'News 22',
            'text' => 'Some economy news 22',
            'categoryId' => '5',
            'isPrivate' => True,
        ],
        [
            'id' => 23,
            'title' => 'News 23',
            'text' => 'Some economy news 23',
            'categoryId' => '5',
            'isPrivate' => True,
        ],
        [
            'id' => 24,
            'title' => 'News 24',
            'text' => 'Some economy news 24',
            'categoryId' => '5',
            'isPrivate' => False,
        ],
        [
            'id' => 25,
            'title' => 'News 25',
            'text' => 'Some economy news 25',
            'categoryId' => '5',
            'isPrivate' => False,
        ],
    ];

    public function __construct(Categories $categories)
    {
        $this->categories = $categories;
    }

    public  function getNews(): array {
        $news = json_decode(Storage::disk('local')->get('news.json'),true);
        return $news;
    }

    public function getNewsId($id): ?array {
        foreach ($this->getNews() as $news){
            if($news['id'] == $id) return $news;
        }
        return null;
    }

    public function getNewsByCategory($id): ?array {
        $result = [];
        $news = [];
        $categoryName = $this->categories->getCategoriesId($id);
        if(is_null($categoryName)) return null;
        foreach ($this->getNews() as $items){
            if($items['categoryId'] == $id){
              $news[] = $items;
            }
        }
        $result['name'] = $categoryName['name'];
        $result['data'] = $news;
        return $result;
    }
}
