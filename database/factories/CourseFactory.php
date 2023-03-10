<?php

namespace Database\Factories;

use App\Models\Platform;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Series>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'title'=>fake()->text(40),
            'title'=>fake()->sentence,
            'type' =>rand(0,1),
            'resources'=>rand(1,50),
            'year'  => fake()->year,
            'price'   => rand(1.00,50.00),
            'image_url' => fake()->imageUrl(),
            'description' => fake()->paragraphs(3,true),
            'link' => fake()->url(),
            'submitted_by' => User::all()->random()->id,
            'duration'=> rand(0,2),
            'platform_id' => Platform::all()->random()->id,
            // 'platform_id' => 'test',
            // 'level_id'    => Level::all()->random()->id,
        ];
    }
}
