<?php

namespace App\Models;

use function PHPUnit\Framework\isNull;

class News
{
    private static $news = [
        [
            'id' => 1,
            'title' => 'News 1',
            'text' => 'Some sport news 1',
            'categoryId' => '1',
        ],
        [
            'id' => 2,
            'title' => 'News 2',
            'text' => 'Some sport news 2',
            'categoryId' => '1',
        ],
        [
            'id' => 3,
            'title' => 'News 3',
            'text' => 'Some sport news 3',
            'categoryId' => '1',
        ],
        [
            'id' => 4,
            'title' => 'News 4',
            'text' => 'Some sport news 4',
            'categoryId' => '1',
        ],
        [
            'id' => 5,
            'title' => 'News 5',
            'text' => 'Some sport news 5',
            'categoryId' => '1',
        ],
        [
            'id' => 6,
            'title' => 'News 6',
            'text' => 'Some politic news 6',
            'categoryId' => '2',
        ],
        [
            'id' => 7,
            'title' => 'News 7',
            'text' => 'Some politic news 7',
            'categoryId' => '2',
        ],
        [
            'id' => 8,
            'title' => 'News 8',
            'text' => 'Some politic news 8',
            'categoryId' => '2',
        ],
        [
            'id' => 9,
            'title' => 'News 9',
            'text' => 'Some politic news 9',
            'categoryId' => '2',
        ],
        [
            'id' => 10,
            'title' => 'News 10',
            'text' => 'Some politic news 10',
            'categoryId' => '2',
        ],
        [
            'id' => 11,
            'title' => 'News 11',
            'text' => 'Some music news 11',
            'categoryId' => '3',
        ],
        [
            'id' => 12,
            'title' => 'News 12',
            'text' => 'Some music news 12',
            'categoryId' => '3',
        ],
        [
            'id' => 13,
            'title' => 'News 13',
            'text' => 'Some music news 13',
            'categoryId' => '3',
        ],
        [
            'id' => 14,
            'title' => 'News 14',
            'text' => 'Some music news 14',
            'categoryId' => '3',
        ],
        [
            'id' => 15,
            'title' => 'News 15',
            'text' => 'Some music news 15',
            'categoryId' => '3',
        ],
        [
            'id' => 16,
            'title' => 'News 16',
            'text' => 'Some movie news 16',
            'categoryId' => '4',
        ],
        [
            'id' => 17,
            'title' => 'News 17',
            'text' => 'Some movie news 17',
            'categoryId' => '4',
        ],
        [
            'id' => 18,
            'title' => 'News 18',
            'text' => 'Some movie news 18',
            'categoryId' => '4',
        ],
        [
            'id' => 19,
            'title' => 'News 19',
            'text' => 'Some movie news 19',
            'categoryId' => '4',
        ],
        [
            'id' => 20,
            'title' => 'News 20',
            'text' => 'Some movie news 20',
            'categoryId' => '4',
        ],
        [
            'id' => 21,
            'title' => 'News 21',
            'text' => 'Some economy news 21',
            'categoryId' => '5',
        ],
        [
            'id' => 22,
            'title' => 'News 22',
            'text' => 'Some economy news 22',
            'categoryId' => '5',
        ],
        [
            'id' => 23,
            'title' => 'News 23',
            'text' => 'Some economy news 23',
            'categoryId' => '5',
        ],
        [
            'id' => 24,
            'title' => 'News 24',
            'text' => 'Some economy news 24',
            'categoryId' => '5',
        ],
        [
            'id' => 25,
            'title' => 'News 25',
            'text' => 'Some economy news 25',
            'categoryId' => '5',
        ],
    ];

    public static function getNews(): array {
        return static::$news;
    }

    public static function getNewsId($id): ?array {
        foreach (static::getNews() as $news){
            if($news['id'] == $id) return $news;
        }
        return null;
    }

    public static function getNewsByCategory($id): ?array {
        $result = [];
        $news = [];
        $categoryName = Categories::getCategoriesId($id);
        if(is_null($categoryName)) return null;
        foreach (static::getNews() as $items){
            if($items['categoryId'] == $id){
              $news[] = $items;
            }
        }
        $result['name'] = $categoryName['name'];
        $result['data'] = $news;
        return $result;
    }
}
