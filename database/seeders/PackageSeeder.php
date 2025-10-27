<?php

namespace Database\Seeders;

use App\Models\Packages;
use Illuminate\Database\Seeder;
use App\Models\Prices;


class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat 3 paket umroh
        Packages::factory()->count(3)->create();
        //  harga global (tidak terkait ke package)
        Prices::insert([
            ['type' => 'QUAD', 'price' => 32600000, 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'TRIPLE', 'price' => 34700000, 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'DOUBLE', 'price' => 38300000, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
