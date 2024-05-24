<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $now = Carbon::now();

        DB::table('products')->insert([
            [
                'name' => 'Product 1',
                'category' => 'Category A',
                'quantity' => 100,
                'price' => 10.00,
                'created_at' => $now,
                'updated_at' => $now,
                'supplier_id' => 1,
            ],
            [
                'name' => 'Product 2',
                'category' => 'Category B',
                'quantity' => 200,
                'price' => 20.00,
                'created_at' => $now,
                'updated_at' => $now,
                'supplier_id' => 2,
            ],
            [
                'name' => 'Product 3',
                'category' => 'Category C',
                'quantity' => 300,
                'price' => 30.00,
                'created_at' => $now,
                'updated_at' => $now,
                'supplier_id' => 3,
            ],
            [
                'name' => 'Product 4',
                'category' => 'Category A',
                'quantity' => 150,
                'price' => 15.00,
                'created_at' => $now,
                'updated_at' => $now,
                'supplier_id' => 1,
            ],
            [
                'name' => 'Product 5',
                'category' => 'Category B',
                'quantity' => 250,
                'price' => 25.00,
                'created_at' => $now,
                'updated_at' => $now,
                'supplier_id' => 2,
            ],
            [
                'name' => 'Product 6',
                'category' => 'Category C',
                'quantity' => 350,
                'price' => 35.00,
                'created_at' => $now,
                'updated_at' => $now,
                'supplier_id' => 3,
            ],
            [
                'name' => 'Product 7',
                'category' => 'Category A',
                'quantity' => 400,
                'price' => 40.00,
                'created_at' => $now,
                'updated_at' => $now,
                'supplier_id' => 1,
            ],
            [
                'name' => 'Product 8',
                'category' => 'Category B',
                'quantity' => 450,
                'price' => 45.00,
                'created_at' => $now,
                'updated_at' => $now,
                'supplier_id' => 2,
            ],
            [
                'name' => 'Product 9',
                'category' => 'Category C',
                'quantity' => 500,
                'price' => 50.00,
                'created_at' => $now,
                'updated_at' => $now,
                'supplier_id' => 3,
            ],
            [
                'name' => 'Product 10',
                'category' => 'Category A',
                'quantity' => 550,
                'price' => 55.00,
                'created_at' => $now,
                'updated_at' => $now,
                'supplier_id' => 1,
            ],
        ]);
    }

}
