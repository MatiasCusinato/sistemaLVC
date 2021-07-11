<?php

namespace Database\Factories;

use App\Models\ComprobanteCabecera;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComprobanteCabeceraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ComprobanteCabecera::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'num_comprobante'=> $this->faker->creditCardNumber,
            'tipo_operacion' => $this->faker->numberBetween($min = 1, $max = 2),
            'fecha' => $this->faker->dateTime($max = 'now'),
        ];
    }
}
