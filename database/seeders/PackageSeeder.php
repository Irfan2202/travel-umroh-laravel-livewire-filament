<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;
use App\Models\Price;


class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat 3 paket umroh
        Package::factory()->count(3)->create();
        //  harga global (tidak terkait ke package)
        Price::insert([
            ['type' => 'QUAD', 'amount' => 32600000, 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'TRIPLE', 'amount' => 34700000, 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'DOUBLE', 'amount' => 38300000, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
