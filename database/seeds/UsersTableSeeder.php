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
        DB::table('users')->insert([
            'id'=>1,
            'name'=>'umer',
            'email'=>'umer28798@gmail.com',
            'username'=>'umer',
            'password'=>bcrypt('secret'),
            'role'=>'SuperAdmin'
        ]);
    }
}
