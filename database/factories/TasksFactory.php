<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Client;
use App\Models\TaskManagement;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class TasksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = TaskManagement::class;
    public function definition(): array
    {
        return [
            "title" => fake()->jobTitle(),
            "description" => fake()->text,
            "status" => rand(0,1)
        ];
    }
}
