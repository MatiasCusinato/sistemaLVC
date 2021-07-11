<?php

namespace Database\Factories;

use App\Models\Articulo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticuloFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Articulo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->lastName,
            'codigo'=> $this->faker->numberBetween(000000000,999999999),
            'descripcion'=> $this->faker->text(100),
            'cantidad'=> $this->faker->numberBetween(1,500),
            'precio' => $this->faker->numberBetween($min = 10, $max = 3500),
            'fecha_vencimiento' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'stock_min' => $this->faker->numberBetween($min = 100, $max = 700),
            'stock_max' => $this->faker->numberBetween($min = 800, $max = 1500), 
            'rubro_id' => $this->faker->numberBetween($min = 1, $max = 40),
        ];
    }
}
