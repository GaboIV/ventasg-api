<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {
    public function run() {
        $rol_empleado = Role::where('name', 'empleado')->first();
	    $rol_admin  = Role::where('name', 'administrador')->first();

	    $employee = new User();
	    $employee->nick = 'mperez';
	    $employee->name = 'María Sabrina Pérez Ramos';
	    $employee->email = 'mperez@listoexpress.com';
	    $employee->password = bcrypt('secret1');
	    $employee->save();
	    $employee->roles()->attach($rol_empleado);

	    $manager = new User();
	    $manager->nick = 'gcaraballo';
	    $manager->name = 'Gabriel Eduardo Caraballo Moya';
	    $manager->email = 'gcaraballo@listoexpress.com';
	    $manager->password = bcrypt('secret2');
	    $manager->save();
	    $manager->roles()->attach($rol_admin);
    }
}
