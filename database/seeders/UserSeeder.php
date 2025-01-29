<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Guesser\Name;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'id' => '1',
                'name' => 'Justin Ornelas',
                'email' => 'soporte@cceo.com.mx',
                'password' => bcrypt('soporte123'),
                'user_type' => 'admin',
            ],
            [
                'id' => '2',
                'name' => 'Jose Esparza',
                'email' => 'soporte2@cceo.com.mx',
                'password' => bcrypt('soporte123'),
                'user_type' => 'customer',
            ],
        ];
        
        foreach ($users as $user) {
            User::UpdateOrCreate(['id' => $user['id']],$user);
        }
    }
}
