<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'firstname' => 'Arya',
                'lastname' => 'Firmansyah',
                'email' => 'arya@gmail.com',
                'age' => 20,
                'position_id' => 1,
            ],
            [
                'firstname' => 'Budi',
                'lastname' => 'Santoso',
                'email' => 'budi@gmail.com',
                'age' => 25,
                'position_id' => 2,
            ],
            [
                'firstname' => 'Citra',
                'lastname' => 'Wijaya',
                'email' => 'cittw@gmail.com',
                'age' => 21,
                'position_id' => 3,
            ],

        ]);
    }
}
