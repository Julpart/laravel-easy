<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected array $data = [
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
    public function run()
    {
        DB::table('categories')->insert($this->getData());
    }

    private function getData() {

        return $this->data;
    }
}
