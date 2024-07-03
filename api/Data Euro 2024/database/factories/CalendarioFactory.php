<?php

namespace Database\Factories;

use App\Models\Jogo;
use App\Models\Selecao;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Calendario>
 */
class CalendarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $start = $this->faker->dateTimeThisYear("-6 months")->format("Y-m-d");
        $end = $this->faker->dateTimeThisYear("+5 months")->format("Y-m-d");

        return [
            "selecao1" => Selecao::factory(),
            "selecao2" => Selecao::factory(),
            "jogo" => Jogo::factory(),
            "data_jogo" => $this->faker->dateTimeBetween($start, $end)->format("Y-m-d")
        ];
    }
}
