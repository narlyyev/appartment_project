<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use function Symfony\Component\Mime\Header\get;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->name;
        return [
            'name' => $name,
            'slug' => str($name . '-' . rand(100, 999))->slug(),
            'phone' => rand(60000000, 65999999),
            'phone_2' => rand(0, 4) ? rand(60000000, 65999999) : null,
            'verified' => fake()->boolean(60),
            'created_at' => fake()->dateTime($max = 'now', $timezone = null),
            'updated_at' => fake()->dateTime($max = 'now', $timezone = null),
        ];
    }
}
