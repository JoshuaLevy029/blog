<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KindSeeder extends Seeder
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
                'name' => 'Administrator',
                'tag' => 'admin',
                'description' => '',
            ],
            [
                'name' => 'Author',
                'tag' => 'author',
                'description' => '',
            ],
            [
                'name' => 'Reviewer',
                'tag' => 'review',
                'description' => '',
            ],
            [
                'name' => 'Subscriber',
                'tag' => 'subscribe',
                'description' => '',
            ],
        ];

        foreach ($data as $i) {
            $i['created_at'] = date('Y-m-d H:i:s');
            DB::table('kind')->insert($i);
        }
    }
}
