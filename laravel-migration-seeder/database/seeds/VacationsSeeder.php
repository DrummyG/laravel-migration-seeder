<?php

use Illuminate\Database\Seeder;
use \Faker\Generator as Faker; 
use App\Vacation;

class VacationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<20; $i++){
            $newVacation = new Vacation();
            $newVacation->name = $faker->word(5);
            $newVacation->description = $faker->text();
            $newVacation->price = $faker->numberBetween(2000, 1000000);
            $newVacation->dateDeparture = $faker->unixTime(new DateTime('+10 weeks'));
            $newVacation->dateReturn =$faker->dateTimeInInterval('+10 weeks', '+20 days');
            $newVacation->offered = $faker->company();
            $newVacation->save();
        }
    }
}
