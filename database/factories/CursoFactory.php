<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Curso::class;
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(), 
            'descripcion' => $this->faker->paragraph(), 
            'categoria' => $this->faker->randomElement(['Desarrollo web', 'Diseño web'])
        ];
    }
}
