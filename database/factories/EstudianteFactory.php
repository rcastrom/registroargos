<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Estudiante;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estudiante>
 */
class EstudianteFactory extends Factory
{
    protected $model=Estudiante::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->name(),
            'appat'=>$this->faker->lastName(),
            'apmat'=>$this->faker->lastName(),
            'control'=>$this->faker->randomNumber(8),
            'tec'=>$this->faker->numberBetween(1,4),
            'correo'=>$this->faker->email(),
            'monto'=>650,
            'pago'=>0,
            'taller'=>1,
            'visita'=>1
        ];
    }
}
