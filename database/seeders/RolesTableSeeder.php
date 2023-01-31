<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Buyer',
            'slug' => 'buyer',
        ]);

        Role::create([
            'name' => 'Seller',
            'slug' => 'seller',
        ]);
    }
}
