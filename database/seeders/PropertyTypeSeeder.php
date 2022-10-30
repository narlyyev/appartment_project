<?php

namespace Database\Seeders;

use App\Models\PropertyType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $objs = [
                'Shophouse',
                'Penthouse',
                'Duplex',
                'Sport hall',
                'Cafe',
                'Restaurant',
            ];
            foreach ($objs as $obj) {
                PropertyType::create([
                    'name' => $obj,
                    'slug' => str($obj)->slug(),
                ]);
            }
        }
    }
}
