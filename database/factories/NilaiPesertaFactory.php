<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NilaiPeserta>
 */
class NilaiPesertaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' =>fake()->name(),
            'email' => fake()->safeEmail(),
            'nilai_x' =>fake()->numberBetween($min=1,$max=33),
            'nilai_y' =>fake()->numberBetween($min=1,$max=23),
            'nilai_z' =>fake()->numberBetween($min=1,$max=18),
            'nilai_w' =>fake()->numberBetween($min=1,$max=13),
        ];
    }
}
