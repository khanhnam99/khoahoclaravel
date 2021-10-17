<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $items = [
            [
                'id' => 1,
                'name' => 'News',
                'customize_name' => 'Tin tức',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'name' => 'Product',
                'customize_name' => 'Sản phẩm',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];

        if ( count($items) > 0 ) {
            foreach ( $items as $item ) {
                $module = DB::table('modules')->where('id', $item['id'])->first();
                if ( !$module ) {
                    DB::table('modules')->insert($item);
                }
            }
        }


    }
}
