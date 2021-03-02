<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'display' => 'admin',
            'name' => 'Administrator',
            'email' => 'admin@blog.com',
            'phone' => '(11) 94807-1948',
            'kind' => 1,
            'gender' => 'M',
            'password' => Hash::make('blog12!@'),
            'email_verified_at' => date('Y-m-d H:i:s'),
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
