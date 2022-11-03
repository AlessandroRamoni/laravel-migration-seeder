<?php

use Illuminate\Database\Seeder;

use App\models\Train;

use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for($i = 0; $i < 50; $i++) {

            $train = new Train();
            $train->azienda = $faker->words(1);
            $train->stazione_di_partenza = $faker->words(1);
            $train->stazione_di_arrivo = $faker->words(1);
            $train->data = $faker->date();
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno = $faker->randomNumber(5, true);
            $train->numero_carrozze = $faker->randomNumber(2, true);
            $train->save();
        }
    }
}
