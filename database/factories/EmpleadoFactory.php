<?php

namespace Database\Factories;
use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
         /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */
    protected $model=Empleado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre'=>$this->faker->name(),
            'Apellido'=>$this->faker->lastName(),
            'Telefono'=>$this->faker->phoneNumber(),
            'Hora_trabajo'=>$this->faker->numberBetween(0, 24)
        ];
    }
}