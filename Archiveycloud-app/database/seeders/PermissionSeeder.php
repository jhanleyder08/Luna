<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Permiso de Módulos
        Permission::create(['name' => 'general']);

        // permisos de usuario
        Permission::create(['name' => 'general.users.index']);
        Permission::create(['name' => 'general.users.edit']);
        Permission::create(['name' => 'general.users.show']);
        Permission::create(['name' => 'general.users.create']);
        Permission::create(['name' => 'general.users.destroy']);

        // permisos de roles
        Permission::create(['name' => 'general.roles.index']);
        Permission::create(['name' => 'general.roles.edit']);
        Permission::create(['name' => 'general.roles.show']);
        Permission::create(['name' => 'general.roles.create']);
        Permission::create(['name' => 'general.roles.destroy']);

        // Creamos el rol
        $admin   = Role::create(['name' => 'Administrador-super']);
        $cliente = Role::create(['name' => 'clientes']);

        // Asignamos los permisos al rol administrador
        $admin->givePermissionTo(Permission::all());

        // Asignamos el rol al usuario
        $user = User::find(1); 
        $user->assignRole('Administrador-super');

        // Asignar permisos limitados para el usuarios
        $cliente->givePermissionTo(Permission::find(1));
        $cliente->givePermissionTo(Permission::find(2));

        $user = User::find(2); 
        $user->assignRole('clientes');
        $user = User::find(3); 
        $user->assignRole('clientes');
    
    }
}