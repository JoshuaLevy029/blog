<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Home',
                'route' => 'home',
                'order' => 1,
            ],
            [
                'name' => 'Contact',
                'route' => 'contact',
                'order' => 2,
            ],
            [
                'name' => 'About',
                'route' => 'about',
                'order' => 3,
            ],
        ];

        foreach ($data as $i) {
            $i['created_at'] = date('Y-m-d H:i:s');
            DB::table('menu')->insert($i);
        }
    }
}
