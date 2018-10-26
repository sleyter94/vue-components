<?php

use Illuminate\Database\Seeder;
use App\Tutor;
use App\User;
use App\Filial;
use Carbon\Carbon;
use Faker\Factory as Faker;

class TutorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $tutor = new Tutor();
        $tutor->firstname = $faker->firstName;
        $tutor->lastname = $faker->lastName;
        $tutor->dni = $faker->randomNumber(8);
        $dt = new Carbon();
        $dt->year($faker->year)->month($faker->month)->day($faker->dayOfMonth);
        $tutor->borndate = $dt;
        $tutor->address = $faker->address;
        $tutor->reference = $faker->address;
        $tutor->email = $faker->email;
        $tutor->cellphone = $faker->phoneNumber;
        $subsidiary = Filial::where('name','LOCAL SAN BORJA')->first();
        $user = User::where('name','Tutor')->first();
        $tutor->user = $user->id;
        $tutor->subsidiary = $subsidiary->id;
        $tutor->save();

    }
}
