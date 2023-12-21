<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'sugih',
            'email' => 'sugih@gmail.com',
            'phone_number' => '081334214567',
            'password' => Hash::make('password'),
            'is_admin' => 1,
        ]);
    }
}
