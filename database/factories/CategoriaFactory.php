<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriaFactory extends Factory{

    public function definition()
    {
        return [
            'nom_categoria' => $this->faker->words(5,true)
        ];
    }
}
