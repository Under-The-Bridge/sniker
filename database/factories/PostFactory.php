<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\Thumbnail;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->text(25),
            'photo' => 'a.png',
            'category_id'=>Category::inRandomOrder()->value('id'),
            'user_id'=>User::inRandomOrder()->value('id'),
            'thumbnail_id'=>Thumbnail::inRandomOrder()->value('id')
        ];
    }
}
