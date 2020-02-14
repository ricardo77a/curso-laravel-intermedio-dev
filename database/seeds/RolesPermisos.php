<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Hace un reset de Roles y Permisios
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        /*================================
        =            Permisos            =
        ================================*/

            Permission::create(['name' => 'correo']);
            Permission::create(['name' => 'subir_archivo']);
            Permission::create(['name' => 'excel']);
            Permission::create(['name' => 'pdf']);
            Permission::create(['name' => 'graficas']);
            Permission::create(['name' => 'archivos']);

        /*=====  End of Permisos  ======*/

        /*=============================
        =            Roles            =
        =============================*/

            /*----------  Super Admin  ----------*/
            $role = Role::create(['name' => 'superadministrador']);
            $role->givePermissionTo(Permission::all());

            /*----------  Permite ver Todo, pero no subir  ----------*/
            $role = Role::create(['name' => 'visualizador']);
            
            /*----------  Puede enviar correos  ----------*/
            $role = Role::create(['name' => 'correo']);
            $role->givePermissionTo('correo');

            /*----------  Puede enviar correos  ----------*/
            $role = Role::create(['name' => 'graficas_archivos']);
            $role->givePermissionTo('graficas');
            $role->givePermissionTo('archivos');

        /*=====  End of Roles  ======*/
    }
}
