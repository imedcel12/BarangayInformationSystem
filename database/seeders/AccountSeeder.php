<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            'first_name'=>'Chadie Gil',
            'last_name'=>'Augis',
            'username'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('test12345'),
            'type'=> "Admin",
        ]);


    }
}
