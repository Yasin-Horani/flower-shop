<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Red',
                'origin' => 'Den Haag',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrDB5D6sijIbe0XgPig3rRPJF1XX4HvAg0g4SQqCL19XaB81mJIJ_l1t8UocTGMQFrrj4&usqp=CAU',
                'price' => 100
            ],
            [
                'name' => 'Red',
                'origin' => 'Den Haag',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrDB5D6sijIbe0XgPig3rRPJF1XX4HvAg0g4SQqCL19XaB81mJIJ_l1t8UocTGMQFrrj4&usqp=CAU',
                'price' => 200
            ],
            [
                'name' => 'Red',
                'origin' => 'Den Haag',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrDB5D6sijIbe0XgPig3rRPJF1XX4HvAg0g4SQqCL19XaB81mJIJ_l1t8UocTGMQFrrj4&usqp=CAU',
                'price' => 200
            ],
            [

                'name' => 'Red',
                'origin' => 'Leiden',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrDB5D6sijIbe0XgPig3rRPJF1XX4HvAg0g4SQqCL19XaB81mJIJ_l1t8UocTGMQFrrj4&usqp=CAU',
                'price' => 200
            ]
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
