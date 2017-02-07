<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {
    public function run() {
      DB::table('users')->insert([
        'name' => 'honoka',
        'email' => 'honoka@honoka.cc',
        'password' => bcrypt('password'),
        'avatar' => '1.jpeg',
      ]);
    }
}
