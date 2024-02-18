<?php

namespace Database\Seeders;

use App\Models\Product;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = collect([
            [
                'name' => 'Tawar Kupas',
                'slug' => 'tawar-kupas',
                'code' => 001,
                'quantity' => 1000,
                'buying_price' => 13000,
                'selling_price' => 15000,
                'quantity_alert' => 1000,
                'tax' => 10,
                'tax_type' => 1,
                'notes' => null,
                'category_id' => 1,
                'unit_id' => 1,
                "user_id"=>1,
                "uuid"=>Str::uuid()
            ],
            [
                'name' => 'Tawar Reguler',
                'slug' => 'tawar-reguler',
                'code' => 002,
                'quantity' => 900,
                'buying_price' => 13000,
                'selling_price' => 15000,
                'quantity_alert' => 900,
                'tax' => 10,
                'tax_type' => 1,
                'notes' => null,
                'category_id' => 1,
                'unit_id' => 1,
                "user_id"=>1,
                "uuid"=>Str::uuid()
            ],
            [
                'name' => 'Gandum Reguler',
                'slug' => 'gandum-reguler',
                'code' => 003,
                'quantity' => 500,
                'buying_price' => 14000,
                'selling_price' => 16000,
                'quantity_alert' => 700,
                'tax' => 10,
                'tax_type' => 1,
                'notes' => null,
                'category_id' => 1,
                'unit_id' => 1,
                "user_id"=>1,
                "uuid"=>Str::uuid()
            ],
            [
                'name' => 'Gandum Kupas',
                'slug' => 'gandum-kupas',
                'code' => 004,
                'quantity' => 500,
                'buying_price' => 12000,
                'selling_price' => 14000,
                'quantity_alert' => 500,
                'tax' => 10,
                'tax_type' => 1,
                'notes' => null,
                'category_id' => 1,
                'unit_id' => 1,
                "user_id"=>1,
                "uuid"=>Str::uuid()
            ]
        ]);

        $products->each(function ($product){
            Product::create($product);
        });
    }
}
