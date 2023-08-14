<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $categories = Category::pluck('id')->toArray();

        
        return [
            'transaction_type' => $this->faker->randomElement(['Pemasukan', 'Pengeluaran']),
            'category_id' => mt_rand(1, 10),
            'amount' => $this->faker->numberBetween(1000, 10000000),
            'description' => $this->faker->sentence(),
            'created_at' => $this->faker->dateTimeThisMonth(),
            'updated_at' => $this->faker->dateTimeThisMonth(),
        ];
    }
}
