<?php

use Illuminate\Database\Seeder;
use App\Institucion;
use Carbon\Carbon;

class InstitutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $institution = new Institucion();
        $institution->name = 'Academia Pitágoras';
        $dt = new Carbon();
        $dt->year(1980)->month(9)->day(14);
        $institution->fecha_nac = $dt;
        $institution->save();
    }
}
