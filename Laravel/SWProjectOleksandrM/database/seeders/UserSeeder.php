<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $role_user = Role::where('name', 'user')->first();

        $admin = New User();
        $admin->name = 'Oleksandr Mus';
        $admin->email = 'oleksandr@larafest.ie';
        $admin->password = Hash::make('password');
        $admin->save();
        $admin->roles()->attach($role_admin);

        
        $user = new User();
        $user->name = 'Max Mus';
        $user->email = 'max@larafest.ie';
        $user->password = Hash::make('password');
        $user->save();
        $user->roles()->attach($role_user);
    }
}
