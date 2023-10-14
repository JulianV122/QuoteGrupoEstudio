<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'=>'Julian Veloza',
            'email'=>'juliana.velozac@autonoma.edu.co',
            'password'=>'hola123'
        ]);
    }
}
