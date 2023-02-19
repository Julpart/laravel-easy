<?php

namespace App\Models;

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

    public function getCategories(): array {
        return $this->categories;
    }

    public function getCategoriesId($id): ?array {
        foreach ($this->getCategories() as $categories){
            if($categories['id'] == $id) return $categories;
            dd($categories);
        }
        return null;
    }
}
