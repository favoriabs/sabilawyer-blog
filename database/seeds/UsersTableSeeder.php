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
        'name' => 'Sabilawyer',
        'email' => 'info@sabilawyer.com',
        'password' => bcrypt('sabilawyer@123'),
        ]);
    }
}
