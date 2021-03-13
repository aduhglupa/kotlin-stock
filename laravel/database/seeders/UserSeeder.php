<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'thisowner',
            'name' => 'Mr. Owner',
            'password' => bcrypt('password'),
            'role_id' => Role::whereSlug('owner')->value('id')
        ]);

        User::create([
            'username' => 'thismanager',
            'name' => 'Mr. Manager',
            'password' => bcrypt('password'),
            'role_id' => Role::whereSlug('manager')->value('id')
        ]);

        User::create([
            'username' => 'thisadmin',
            'name' => 'Mr. Admin',
            'password' => bcrypt('password'),
            'role_id' => Role::whereSlug('admin')->value('id')
        ]);
    }
}
