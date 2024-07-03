<?php

namespace Database\Factories;

use App\Models\Selecao;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jogador>
 */
class JogadorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nome" => $this->faker->name(),
            "nacionalidade" => $this->faker->name(),
            "camisola" => $this->faker->numberBetween(0,99),
            "selecao" => Selecao::factory(),
            "golos" => $this->faker->numberBetween(0,6)
        ];
    }
}
