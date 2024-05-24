<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\SupplierSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'mohamed',
            'email' => 'mohamed@admin.com',
            'password' => '1234',
        ]);
        $this->call([
            SupplierSeeder::class,
            // Add other seeders if necessary
        ]);

        $this->call(ProductSeeder::class);
        
    }
}
