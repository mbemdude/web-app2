<?php

namespace Database\Factories;

use App\Models\Santri;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Spp>
 */
class SppFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $santri = Santri::pluck('nis')->random();

        return [
            'kode_tagihan'      => fake()->unique()->randomNumber(6),
            // 'santri_nis'        => $santri,
            'total_tagihan'     => fake()->randomFloat(2, 50, 500),
        ];
    }
}
