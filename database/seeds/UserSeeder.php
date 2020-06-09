<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'name' => 'admin',
          'email' => 'admin@gmail.com',
          'password' => Hash::make('123admin321'),
          'admin' => '1',
        ]);

        DB::table('users')->insert([
          'name' => 'admin1',
          'email' => 'admin1@gmail.com',
          'password' => Hash::make('123admin321'),
          'admin' => '1',
        ]);
    }
}
