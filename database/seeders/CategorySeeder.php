<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Schema::disableForeignKeyConstraints();
        category::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'IT', 'Finance ', 'Accounting', 'TitanArum',
        ];

        foreach ($data as $value) {

            category::insert([
                'name' => $value,
            ]);

        }

    }
}