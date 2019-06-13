<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder {
    public function run() {
        $role_employee = new Role();
	    $role_employee->name = 'empleado';
	    $role_employee->description = 'Usuario Empleado';
	    $role_employee->save();

	    $role_manager = new Role();
	    $role_manager->name = 'administrador';
	    $role_manager->description = 'Administrador';
	    $role_manager->save();
    }
}
