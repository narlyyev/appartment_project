<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Nette\Utils\Image;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $ownerType = DB::table('owner_types')->inRandomOrder()->first();
        $location = DB::table('locations')->inRandomOrder()->first();
        $propertyType = DB::table('property_types')->inRandomOrder()->first();
        $customer = DB::table('customers')->inRandomOrder()->first();
        return [
            'location_id' => $location->id,
            'owner_type_id' => $ownerType->id,
            'property_type_id' => $propertyType->id,
            'customer_id' => $customer->id,
            'rent' => fake()->boolean(30),
            'area' => rand(10, 10000),
            'repair' => fake() -> boolean(40),
            'description' => fake() -> text($maxNbChars = rand(100, 300)),
            'credit' => fake() -> boolean(60),
            'price' => rand(2000, 10000),
            'documents' => fake()->boolean(50),
            'viewed' => rand(2, 132),
        ];
    }
}
