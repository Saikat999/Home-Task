<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id' => '1',
            'name' => 'Saikat',
            'email' => 'saikat@gmail.com',
            'password' => Hash::make('123456')
        ]);

        User::create([
            'role_id' => '2',
            'name' => 'Zahid',
            'email' => 'zahid@gmail.com',
            'password' => Hash::make('123456')
        ]);
    }
}
