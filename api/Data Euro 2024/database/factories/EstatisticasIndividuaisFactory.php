<?php

namespace Database\Factories;

use App\Models\Jogador;
use App\Models\Jogo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EstatisticasIndividuais>
 */
class EstatisticasIndividuaisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "jogador" => Jogador::factory(),
            "passes" => $this->faker->numberBetween(3,18),
            "assistencias" => $this->faker->numberBetween(0,5),
            "remates" => $this->faker->numberBetween(0,10),
            "minutos" => $this->faker->numberBetween(1,95),
            "jogo" => Jogo::factory()
        ];
    }
}
