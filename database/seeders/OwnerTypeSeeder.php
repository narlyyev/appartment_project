<?php

namespace Database\Seeders;

use App\Models\OwnerType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OwnerTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objs = [
            'Own',
            'State',
        ];
        foreach ($objs as $obj) {
            OwnerType::create([
                'name' => $obj,
                'slug' =>str($obj)->slug(),
            ]);
        }
    }
}
