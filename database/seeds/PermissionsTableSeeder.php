<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permission list
        Permission::create(['name' => 'herramientas.index']);
        Permission::create(['name' => 'herramientas.edit']);
        Permission::create(['name' => 'herramientas.show']);
        Permission::create(['name' => 'herramientas.destroy']);
        Permission::create(['name' => 'herramientas.create']);

        //admin
        $admin = Role::create(['name' => 'Admin']);

        $admin->givePermissionTo([
          'herramientas.index',
          'herramientas.edit',
          'herramientas.show',
          'herramientas.destroy',
          'herramientas.create'
        ]);

        //guest
        $guest = Role::create(['name' => 'Guest']);

        $guest->givePermissionTo([
          'herramientas.index',
          'herramientas.show'
        ]);

        //user admin
        $user = User::find(1);
        $user->assignRole('Admin');

        $user = User::find(2);
        $user->assignRole('Guest');
    }
}
