<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        DB::table('suppliers')->insert([
            [
                'name' => 'Supplier 1',
                'adress' => '123 Main Street',
                'phone_number' => '123-456-7890',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Supplier 2',
                'adress' => '456 Elm Street',
                'phone_number' => '456-789-0123',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Supplier 3',
                'adress' => '789 Oak Street',
                'phone_number' => '789-012-3456',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Add more supplier data as needed
        ]);
    }
}
