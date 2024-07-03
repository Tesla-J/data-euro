<?php

namespace Database\Factories;

use App\Models\Jogo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EstatisticaTime>
 */
class EstatisticaTimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "remates" => $this->faker->numberBetween(0,10),
            "livres" => $this->faker->numberBetween(0,19),
            "foras_jogo" => $this->faker->numberBetween(0,3),
            "jogo" => Jogo::factory()
        ];
    }
}
