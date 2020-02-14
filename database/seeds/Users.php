<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/*=============================
    	=            ROLES            =
    	=============================*/
    	
		$user = User::create([ 
				'name' => 'Rol de Super Administrador', 
				'email' => 'superadministrador_role@laravel.com', 
				'password' => bcrypt('123qwe'),  
			]); 
		$user->assignRole('superadministrador');

		$user = User::create([ 
				'name' => 'Rol de Correo', 
				'email' => 'correo_role@laravel.com', 
				'password' => bcrypt('123qwe'),  
			]); 
		$user->assignRole('correo');	
    	
    	
    	/*=====  End of ROLES  ======*/
    	

    	/*================================
    	=            Permisos            =
    	================================*/
    	
		$user = User::create([ 
				'name' => 'Permiso Correo', 
				'email' => 'permiso_correo@laravel.com', 
				'password' => bcrypt('123qwe'),  
			]); 
		$user->givePermissionTo('correo');

		$user = User::create([ 
				'name' => 'Permiso Subir Archivo', 
				'email' => 'permiso_subir_archivo@laravel.com', 
				'password' => bcrypt('123qwe'),  
			]); 
		$user->givePermissionTo('subir_archivo');
    	
    	/*=====  End of Permisos  ======*/
    	
    }
}
