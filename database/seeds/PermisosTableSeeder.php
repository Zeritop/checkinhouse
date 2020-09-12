<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class PermisosTableSeeder extends Seeder
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


      Permission::create(['name' => 'calendarios.index']);
      Permission::create(['name' => 'calendarios.edit']);
      Permission::create(['name' => 'calendarios.show']);
      Permission::create(['name' => 'calendarios.destroy']);
      Permission::create(['name' => 'calendarios.create']);

      //Permission list
      Permission::create(['name' => 'catServs.index']);
      Permission::create(['name' => 'catServs.edit']);
      Permission::create(['name' => 'catServs.show']);
      Permission::create(['name' => 'catServs.destroy']);
      Permission::create(['name' => 'catServs.create']);

      //Permission list
      Permission::create(['name' => 'chGeneradors.index']);
      Permission::create(['name' => 'chGeneradors.edit']);
      Permission::create(['name' => 'chGeneradors.show']);
      Permission::create(['name' => 'chGeneradors.destroy']);
      Permission::create(['name' => 'chGeneradors.create']);

      //Permission list
      Permission::create(['name' => 'chHistorials.index']);
      Permission::create(['name' => 'chHistorials.edit']);
      Permission::create(['name' => 'chHistorials.show']);
      Permission::create(['name' => 'chHistorials.destroy']);
      Permission::create(['name' => 'chHistorials.create']);

      //Permission list
      Permission::create(['name' => 'chRealizars.index']);
      Permission::create(['name' => 'chRealizars.edit']);
      Permission::create(['name' => 'chRealizars.show']);
      Permission::create(['name' => 'chRealizars.destroy']);
      Permission::create(['name' => 'chRealizars.create']);

      //Permission list
      Permission::create(['name' => 'clientes.index']);
      Permission::create(['name' => 'clientes.edit']);
      Permission::create(['name' => 'clientes.show']);
      Permission::create(['name' => 'clientes.destroy']);
      Permission::create(['name' => 'clientes.create']);

      //Permission list
      Permission::create(['name' => 'contenedors.index']);
      Permission::create(['name' => 'contenedors.edit']);
      Permission::create(['name' => 'contenedors.show']);
      Permission::create(['name' => 'contenedors.destroy']);
      Permission::create(['name' => 'contenedors.create']);

      //Permission list
      Permission::create(['name' => 'domicilios.index']);
      Permission::create(['name' => 'domicilios.edit']);
      Permission::create(['name' => 'domicilios.show']);
      Permission::create(['name' => 'domicilios.destroy']);
      Permission::create(['name' => 'domicilios.create']);

      //Permission list
      Permission::create(['name' => 'fotos.index']);
      Permission::create(['name' => 'fotos.edit']);
      Permission::create(['name' => 'fotos.show']);
      Permission::create(['name' => 'fotos.destroy']);
      Permission::create(['name' => 'fotos.create']);

      //Permission list
      Permission::create(['name' => 'permisos.index']);
      Permission::create(['name' => 'permisos.edit']);
      Permission::create(['name' => 'permisos.show']);
      Permission::create(['name' => 'permisos.destroy']);
      Permission::create(['name' => 'permisos.create']);

      //Permission list
      Permission::create(['name' => 'personales.index']);
      Permission::create(['name' => 'personales.edit']);
      Permission::create(['name' => 'personales.show']);
      Permission::create(['name' => 'personales.destroy']);
      Permission::create(['name' => 'personales.create']);

      //Permission list
      Permission::create(['name' => 'repuestos.index']);
      Permission::create(['name' => 'repuestos.edit']);
      Permission::create(['name' => 'repuestos.show']);
      Permission::create(['name' => 'repuestos.destroy']);
      Permission::create(['name' => 'repuestos.create']);

      //Permission list
      Permission::create(['name' => 'roles.index']);
      Permission::create(['name' => 'roles.edit']);
      Permission::create(['name' => 'roles.show']);
      Permission::create(['name' => 'roles.destroy']);
      Permission::create(['name' => 'roles.create']);

      //Permission list
      Permission::create(['name' => 'servicioss.index']);
      Permission::create(['name' => 'servicioss.edit']);
      Permission::create(['name' => 'servicioss.show']);
      Permission::create(['name' => 'servicioss.destroy']);
      Permission::create(['name' => 'servicioss.create']);

      //Permission list
      Permission::create(['name' => 'diagnosticogeneral.index']);
      Permission::create(['name' => 'diagnosticogeneral.edit']);
      Permission::create(['name' => 'diagnosticogeneral.show']);
      Permission::create(['name' => 'diagnosticogeneral.destroy']);
      Permission::create(['name' => 'diagnosticogeneral.create']);

      //Permission list
      Permission::create(['name' => 'mantenimientofrenos.index']);
      Permission::create(['name' => 'mantenimientofrenos.edit']);
      Permission::create(['name' => 'mantenimientofrenos.show']);
      Permission::create(['name' => 'mantenimientofrenos.destroy']);
      Permission::create(['name' => 'mantenimientofrenos.create']);

      //Permission list
      Permission::create(['name' => 'tallers.index']);
      Permission::create(['name' => 'tallers.edit']);
      Permission::create(['name' => 'tallers.show']);
      Permission::create(['name' => 'tallers.destroy']);
      Permission::create(['name' => 'tallers.create']);

      //Permission list
      Permission::create(['name' => 'tipoHerramientas.index']);
      Permission::create(['name' => 'tipoHerramientas.edit']);
      Permission::create(['name' => 'tipoHerramientas.show']);
      Permission::create(['name' => 'tipoHerramientas.destroy']);
      Permission::create(['name' => 'tipoHerramientas.create']);

      //Permission list
      Permission::create(['name' => 'uusers.index']);
      Permission::create(['name' => 'uusers.edit']);
      Permission::create(['name' => 'uusers.show']);
      Permission::create(['name' => 'uusers.destroy']);
      Permission::create(['name' => 'uusers.create']);

      //Permission list
      Permission::create(['name' => 'vehiculos.index']);
      Permission::create(['name' => 'vehiculos.edit']);
      Permission::create(['name' => 'vehiculos.show']);
      Permission::create(['name' => 'vehiculos.destroy']);
      Permission::create(['name' => 'vehiculos.create']);

      //Permission list
      Permission::create(['name' => 'intranet.index']);
      Permission::create(['name' => 'intranet.edit']);
      Permission::create(['name' => 'intranet.show']);
      Permission::create(['name' => 'intranet.destroy']);
      Permission::create(['name' => 'intranet.create']);

      //admin
      $admin = Role::create(['name' => 'Admin']);

      $admin->givePermissionTo(Permission::all());


      //user admin
      $user = User::find(1);
      $user->assignRole('Admin');


    }
}
