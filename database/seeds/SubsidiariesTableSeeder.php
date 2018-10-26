<?php

use Illuminate\Database\Seeder;
use App\Filial;
use App\Institucion;

class SubsidiariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subsidiary = new Filial();
        $subsidiary->name = 'LOCAL SAN BORJA';
        $subsidiary->address = 'AV. Javier Prado Este 2802. (Cruce con Av. San Luis)';
        $subsidiary->phones = '';
        $institution = Institucion::where('name','Academia Pitágoras')->first();
        $subsidiary->institution = $institution->id;
        $subsidiary->save();
    }
}
