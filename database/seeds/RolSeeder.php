<?php

use Illuminate\Database\Seeder;
use App\Rol;
use App\User;
class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = new Rol();
        $rol->rol = "Usuario";
        $rol->save();
        
        $rol = new Rol();
        $rol->rol = "Cliente";
        $rol->save();

        
    }
}
