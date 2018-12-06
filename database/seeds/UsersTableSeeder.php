<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'login'=>'sysuser',
        //     'name'=>'Sys',
        //     'surname'=>'User',
        //     'password'=>bcrypt('sysuser')
        // ]);
        // DB::table('users')->insert([
        //     'login'=>'loracz',
        //     'name'=>'Łukasz',
        //     'surname'=>'Oracz',
        //     'password'=>bcrypt('test')
        // ]);
        DB::table('users')->insert([
            'login'=>'anowak',
            'name'=>'Adam',
            'surname'=>'Nowak',
            'password'=>bcrypt('fhfhdfhdf')
        ]);
        DB::table('users')->insert([
            'login'=>'pkowalski',
            'name'=>'Piotr',
            'surname'=>'Kowalski',
            'password'=>bcrypt('fhdffjfgfg')
        ]);
    }
}
