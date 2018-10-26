<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Filial;
use App\Tutor;
use App\Alumno;
use Faker\Factory as Faker;
use Carbon\Carbon;


class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $student = new Alumno();
        $student->firstname = $faker->firstName;
        $student->lastname = $faker->lastName;
        $student->dni = $faker->randomNumber(8);
        $dt = new Carbon();
        $dt->year($faker->year)->month($faker->month)->day($faker->dayOfMonth);
        $student->borndate = $dt;
        $student->email = $faker->email;
        $user = User::where('name','Tutor')->first();
        $tutor = Tutor::where('user',$user->id)->first();
        $subsidiary = Filial::where('name','LOCAL SAN BORJA')->first();
        $student->tutor = $tutor->id;
        $student->subsidiary = $subsidiary->id;
        $user = User::where('name','User')->first();
        $student->user = $user->id;
        $student->save();
    }
}
