<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('admins')->insert([
            'name' => 'test',
            'email' => 'test1@test.com',
            'password' => Hash::make('password123'),
            'created_at' => '2023/01/01 11:11:11'
        ]);
    }
}
