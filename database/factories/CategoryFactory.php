<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
// se agrega parautilzar Str metodo para generar slug
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name=$this->faker->unique()->word(20);
        return [
           'name'=> $name,
           'slug'=> Str::slug($name)
        ];
    }
}
