<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class KategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        kategory::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'IT', 'Finance ', 'Accounting', 'TitanArum',
        ];

        foreach ($data as $value) {

            kategory::insert([
                'name' => $value,
            ]);

        }
    }
}