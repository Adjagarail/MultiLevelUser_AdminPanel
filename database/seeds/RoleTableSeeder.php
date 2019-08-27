<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_superadmin = new Role();
        $role_superadmin->name = 'SuperAdmin';
        $role_superadmin->description = 'Administrateur Général';
        $role_superadmin->save();

        $role_manager = new Role();
        $role_manager->name = 'Manager';
        $role_manager->description = 'Manager des utilisateurs';
        $role_manager->save();

        $role_utilisateur = new Role();
        $role_utilisateur->name = 'Utilisateur';
        $role_utilisateur->description = 'Utilisateur simple';
        $role_utilisateur->save();
    }
}
