<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
          [
              'name' => 'Samuel',
              'username' => 'SamuelDSP',
              'phone' => '34992824243',
              'email' => 'samusouza2402@gmail.com',
              'role' => 'admin',
              'status' => 'active',
              'password' => bcrypt('Samuela2015!')
          ],
          [
              'name' => 'SiteCrafters',
              'username' => 'SiteCrafters',
              'phone' => '34992824243',
              'email' => 'sitecrafters.contato@gmail.com',
              'role' => 'user',
              'status' => 'active',
              'password' => bcrypt('Samuela2015!')
          ]
        ]);
    }
}
