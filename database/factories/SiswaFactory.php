<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Siswa;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Siswa::class;

    public function definition(): array
    {
        return [
            'nis' => $this->faker->numerify('##########'),
            'nama' => $this->faker->name
        ];
    }
}
