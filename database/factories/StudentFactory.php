<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Kelas;
use App\Models\Students;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nis' => fake()->randomNumber(5,true),
            'nama' => fake()->name(),
            'kelas_id' => fake()->numberBetween(1,5),
            'tgl_lahir' => fake()->date(),
            'alamat' => fake()->address(),
        ];
    }
}