<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
         'name'=>'admin',
         'email'=>'zunaldo@gmail.com',
         'password'=>bcrypt('zunaldo')
        ]);
        user::create([
         'name'=>'udin',
         'email'=>'yono@gmail.com',
         'password'=>bcrypt('zpolo')
        ]);
    }
}
