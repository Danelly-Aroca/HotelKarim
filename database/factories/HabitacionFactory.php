<?php

namespace Database\Factories;
use App\Models\Habitacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class HabitacionFactory extends Factory
{
         /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */
    protected $model=Habitacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Tipo_habitacion'=>$this->faker->randomElement($array = array ('Personal','Doble','Triple','Suit')),
            'Numero_habitacion'=>$this ->faker->numberBetween($min =1, $max =70)
        ];
    }
}