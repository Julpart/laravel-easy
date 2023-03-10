<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Categories
{
    private array $categories = [
        [
            'id' => 1,
            'name' => 'Спорт',
        ],
        [
            'id' => 2,
            'name' => 'Политика',
        ],
        [
            'id' => 3,
            'name' => 'Музыка',
        ],
        [
            'id' => 4,
            'name' => 'Фильмы',
        ],
        [
            'id' => 5,
            'name' => 'Экономика',
        ],

    ];

    public function getCategories() {
        $categorires = DB::table('categories')->get();
        return $categorires;
    }

    public function getCategoriesId($id) {
        $categoriesId = DB::table('categories')->find($id);
        return $categoriesId;
    }
}
