<?php

namespace Database\Seeders;

use App\Models\Commande;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class commadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Define the data
        $data = [
            ['id' => 1, 'product_id' => 1, 'quantity' => 2, 'created_at' => '2024-05-24 02:02:25', 'updated_at' => '2024-05-24 02:02:25'],
            ['id' => 1, 'product_id' => 2, 'quantity' => 2, 'created_at' => '2024-05-24 02:02:25', 'updated_at' => '2024-05-24 02:02:25'],
            ['id' => 1, 'product_id' => 3, 'quantity' => 4, 'created_at' => '2024-05-24 02:02:25', 'updated_at' => '2024-05-24 02:02:25'],
            ['id' => 2, 'product_id' => 3, 'quantity' => 2, 'created_at' => '2024-04-24 02:02:25', 'updated_at' => '2024-04-24 02:02:25'],
            ['id' => 2, 'product_id' => 1, 'quantity' => 1, 'created_at' => '2024-04-24 02:02:25', 'updated_at' => '2024-04-24 02:02:25'],
            ['id' => 2, 'product_id' => 2, 'quantity' => 6, 'created_at' => '2024-04-24 02:02:25', 'updated_at' => '2024-04-24 02:02:25'],
            ['id' => 3, 'product_id' => 4, 'quantity' => 8, 'created_at' => '2024-03-24 02:02:25', 'updated_at' => '2024-03-24 02:02:25'],
            ['id' => 3, 'product_id' => 5, 'quantity' => 6, 'created_at' => '2024-03-24 02:02:25', 'updated_at' => '2024-03-24 02:02:25'],
            ['id' => 3, 'product_id' => 3, 'quantity' => 9, 'created_at' => '2024-03-24 02:02:25', 'updated_at' => '2024-03-24 02:02:25'],
            ['id' => 4, 'product_id' => 10, 'quantity' => 3, 'created_at' => '2024-02-24 02:02:25', 'updated_at' => '2024-02-24 02:02:25'],
            ['id' => 4, 'product_id' => 7, 'quantity' => 1, 'created_at' => '2024-02-24 02:02:25', 'updated_at' => '2024-02-24 02:02:25'],
            ['id' => 5, 'product_id' => 6, 'quantity' => 2, 'created_at' => '2024-01-24 02:02:25', 'updated_at' => '2024-01-24 02:02:25'],
        ];

        // Insert data into the database
        foreach ($data as $row) {
            Commande::create($row);
        }
    }
}
