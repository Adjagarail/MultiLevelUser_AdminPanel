<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_superadmin = Role::where('name', 'SuperAdmin')->first();
        $role_manager  = Role::where('name', 'Manager')->first();
        $role_utilisateur = Role::where('name', 'Utilisateur')->first();
        
        $utilisateur = new User();
        $utilisateur->name = 'Nom Utilisateur';
        $utilisateur->email = 'utilisateur@example.com';
        $utilisateur->password = bcrypt('secret');
        $utilisateur->save();
        $utilisateur->roles()->attach($role_utilisateur);
        
        $manager = new User();
        $manager->name = 'Nom Manager';
        $manager->email = 'manager@example.com';
        $manager->password = bcrypt('secret');
        $manager->save();
        $manager->roles()->attach($role_manager);

        $superadmin = new User();
        $superadmin->name = 'Nom Superadmin';
        $superadmin->email = 'superadmin@example.com';
        $superadmin->password = bcrypt('secret');
        $superadmin->save();
        $superadmin->roles()->attach($role_superadmin);
    }
}
