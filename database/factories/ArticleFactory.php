<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class ArticleFactory
 * @package Database\Factories
 */
class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=> User::factory(),
            'title'=>$this->faker->sentence(),
            'excerpt'=>$this->faker->sentence(),
            'body'=>$this->faker->paragraph(),
        ];
    }
}
