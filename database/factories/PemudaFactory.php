<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pemuda;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pemuda>
 */
class PemudaFactory extends Factory
{
    protected $model = Pemuda::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                //
                'nip' => fake()->unique()->numerify(),
                'name' => fake()->name(),
                'alamat' => fake()->address(),
                'email' => fake()->unique()->safeEmail(),
            ];
    
    }
}
