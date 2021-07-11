<?php

namespace Database\Factories;

use App\Models\ComprobanteRenglon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComprobanteRenglonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ComprobanteRenglon::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'comprobanteCabecera_id' => $this->faker->numberBetween($min = 1, $max = 25),
            'articulo_id' => $this->faker->numberBetween($min = 1, $max = 65),
            'cantidad' => $this->faker->numberBetween($min = 10, $max = 50),
        ];
    }
}
