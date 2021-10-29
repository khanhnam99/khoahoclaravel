<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//        $users = DB::table('users')->get();
//        DB::table('users')->insert([
//            'name' => 'Stephen Nguyen',
//            'email' =>'admin@gmail.com',
//            'password' => Hash::make('123456')
//        ]);

        for ($i = 1 ; $i <= 1000; $i++) {
            DB::table('users')->insert([
                'name' => 'Stephen Nguyen',
                'email' =>$i.'admin@gmail.com',
                'password' => Hash::make('12345'.$i)
            ]);
        }



        $pass  = 'password';
        if (Hash::check('secret', $pass))
        {
            // The passwords match...
        }
    }
}
