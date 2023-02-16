<?php

namespace App\Models;

class Categories
{
    private array $categories = [
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
