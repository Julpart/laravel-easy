<?php

namespace App\Models;

class Categories
{
    private static $categories = [
        [
            'id' => 1,
            'name' => 'Sport',
        ],
        [
            'id' => 2,
            'name' => 'Politics',
        ],
        [
            'id' => 3,
            'name' => 'Music',
        ],
        [
            'id' => 4,
            'name' => 'Movies',
        ],
        [
            'id' => 5,
            'name' => 'Economy',
        ],

    ];

    public static function getCategories(): array {
        return static::$categories;
    }

    public static function getCategoriesId($id): ?array {
        foreach (static::getCategories() as $categories){
            if($categories['id'] == $id) return $categories;
        }
        return null;
    }
}
