<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = collect([
            [
                'id'    => 1,
                'name'  => 'TAWAR',
                'slug'  => 'tawar',
                "user_id" => 1,
            ],
            [
                'id'    => 2,
                'name'  => 'SANDWICH',
                'slug'  => 'sandwich',
                "user_id" => 1,

            ],
            [
                'id'    => 3,
                'name'  => 'ROTI ISI',
                'slug'  => 'roti-isi',
                "user_id" => 1,

            ],
            [
                'id'    => 4,
                'name'  => 'CHEESE CAKE',
                'slug'  => 'cheese-cake',
                "user_id" => 1,

            ],
        ]);

        $categories->each(function ($category) {
            Category::insert($category);
        });
    }
}
