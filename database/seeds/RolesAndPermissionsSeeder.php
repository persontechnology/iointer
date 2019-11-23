<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        
        Permission::create(['name' => 'Accesso a planes']);
        Permission::create(['name' => 'Accesso a clientes']);
        Permission::create(['name' => 'Acceso a facturas']);
        Permission::create(['name' => 'Accesso a soporte']);

        $rol=Role::firstOrCreate(['name' => 'Administrador']);
        $rol=Role::firstOrCreate(['name' => 'Secretaria']);
        Role::firstOrCreate(['name' => 'Soporte']);
        Role::firstOrCreate(['name' => 'Cliente']);
        $rol->givePermissionTo(Permission::all());

        $user= User::firstOrCreate([
            'name' => 'jonathan',
            'email' => 'soysoftware@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        $user->assignRole('Administrador');


    }
}
