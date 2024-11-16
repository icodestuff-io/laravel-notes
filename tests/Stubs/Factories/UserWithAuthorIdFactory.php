<?php

declare(strict_types=1);

namespace Icodesutff\LaravelNotes\Tests\Stubs\Factories;

use Icodesutff\LaravelNotes\Tests\Stubs\Models\UserWithAuthorId;
use Illuminate\Database\Eloquent\Factories\Factory;


class UserWithAuthorIdFactory extends Factory
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
    protected $model = UserWithAuthorId::class;

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
            'name'  => $this->faker->name,
            'email' => $this->faker->safeEmail,
        ];
    }
}
