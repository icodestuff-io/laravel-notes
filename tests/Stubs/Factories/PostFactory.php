<?php

declare(strict_types=1);

namespace Icodesutff\LaravelNotes\Tests\Stubs\Factories;

use Icodesutff\LaravelNotes\Tests\Stubs\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;


class PostFactory extends Factory
{
    /* -----------------------------------------------------------------
     |  Properties
     | -----------------------------------------------------------------
     */

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /* -----------------------------------------------------------------
     |  Main Methods
     | -----------------------------------------------------------------
     */

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'title'   => $this->faker->paragraph,
            'content' => $this->faker->paragraphs(5, true),
        ];
    }
}
