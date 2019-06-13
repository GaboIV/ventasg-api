<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run() {
		$this->call(RoleTableSeeder::class);
		$this->call(UserTableSeeder::class);
		$this->call(AlmacenesSeeder::class);
		$this->call(GruposSeeder::class);
		$this->call(MarcasSeeder::class);
		$this->call(ProductoSeeder::class);
		$this->call(UnidadesSeeder::class);
    }
}
