<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([[
            'name' => 'Tharun K',
            'email' => 'tharun@gmail.com',
            'mobile' => '9876543210',
            'password' => Hash::make('Tharun@123'),
            'user_type' => 0,
        ],
        [
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'mobile' => '9988776655',
            'password' => Hash::make('Admin@123'),
            'user_type' => 1,
        ]
        ]
    );
    }
}
