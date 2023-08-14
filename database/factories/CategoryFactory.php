<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $type = $this->faker->randomElement(['Pemasukan', 'Pengeluaran']);
    
        $name = $this->faker->unique()->name();
        $description = $this->faker->sentence;

        if ($type === 'Pemasukan') {
            $name = $this->faker->randomElement(['Gaji', 'Tunjangan', 'Bonus']);
        } elseif ($type === 'Pengeluaran') {
            $name = $this->faker->randomElement(['Sewa Kost', 'Makan', 'Pakaian', 'Nonton Bioskop']);
        }

        return [
            'name' => $name,
            'description' => $description,
            'type' => $type,
        ];
    }
}
