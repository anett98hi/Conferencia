<?php

use Illuminate\Database\Seeder;
use App\Proyectos;

class ProyectosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proyecto = new Proyectos();
        $proyecto->name_pro = "";
        $proyecto->monto = "";
        $proyecto->fechai = "";
        $proyecto->fechaf = "";
        $proyecto->recursos = "";
        $proyecto->plan = "";
        $proyecto->semaforo = "";
        $proyecto->avance = "";
        $proyecto->desviaciones = "";
        $proyecto->save();
    }
}
