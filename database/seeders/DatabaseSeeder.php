<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Customer;
use App\Models\Property;
use App\Models\PropertyType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            LocationSeeder::class,
            PropertyTypeSeeder::class,
            OwnerTypeSeeder::class,
        ]);
        Customer::factory()->count(50)->create();
        Property::factory()->count(250)->create();
    }
}
