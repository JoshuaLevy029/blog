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
                'route' => 'index',
                'order' => 1,
                'icon' => 'fas fa-home',
            ],
            [
                'name' => 'About',
                'route' => 'about',
                'order' => 2,
                'icon' => 'far fa-user-circle',
            ],
            [
                'name' => 'Contact',
                'route' => 'contact',
                'order' => 3,
                'icon' => 'far fa-comments',
            ],
        ];

        foreach ($data as $i) {
            $i['created_at'] = date('Y-m-d H:i:s');
            DB::table('menu')->insert($i);
        }
    }
}
