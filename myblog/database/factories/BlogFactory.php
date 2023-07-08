<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    
    public function definition()
    {
        return [
            'auth' => fake()->name(),
            'title' => fake()->name(),
            'description' => fake()->text(),
            'image_path' => fake()->name(),
        ];
    }
}
