<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Para crear un seeder debo ejecutar php artisan make:seeder nombreDelSeeder
        $this->call(SeederHomeClientes::class);
        $this->call(SeederHomeServicios::class);
    }
}
