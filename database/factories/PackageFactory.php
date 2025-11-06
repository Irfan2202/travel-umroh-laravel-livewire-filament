<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Packages>
 */
class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Tambahkan logika untuk tanggal dan durasi
        $departureDate = $this->faker->dateTimeBetween('now', '+3 months');
        $durationDays = $this->faker->numberBetween(8, 14);
        $returnDate = (clone $departureDate)->modify("+{$durationDays} days");

        return [
            'title' => $this->faker->sentence(3),
            'image' => $this->faker->imageUrl(800, 600, 'travel', true, 'umroh'),
            'description' => $this->faker->paragraph(3),
            'guide_name' => $this->faker->name(),
            'hotel_makkah' => $this->faker->company() . ' Makkah',
            'hotel_madinah' => $this->faker->company() . ' Madinah',
            'hotel_stars' => $this->faker->numberBetween(3, 5),
            'departure_date' => $departureDate->format('Y-m-d'),
            'return_date' => $returnDate->format('Y-m-d'),
            'departure_day' => $departureDate->format('l'),
            'duration_days' => $durationDays,
            'total_pax' => $this->faker->numberBetween(30, 50),
            'available_pax' => $this->faker->numberBetween(0, 30),
            'departure_location' => $this->faker->city(),
            'airline' => $this->faker->randomElement([
                'Garuda Indonesia',
                'Saudi Airlines',
                'Emirates',
                'Qatar Airways',
            ]),
            'flight_route' => $this->faker->randomElement([
                'Jakarta - Jeddah - Madinah',
                'Surabaya - Jeddah - Madinah',
                'Medan - Jeddah - Madinah',
                'Bali - Jeddah - Madinah',
            ]),
        ];
    }
}
