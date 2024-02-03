<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {


        for ($i = 0; $i < 100; $i++) {
            $actualTrains = new Train();

            $actualTrains->azienda = $faker->company();
            $actualTrains->stazione_partenza = $faker->city();
            $actualTrains->stazione_arrivo = $faker->city();
            $actualTrains->data_partenza = $faker->date();
            $actualTrains->orario_partenza = $faker->time();

            $actualTrains->orario_arrivo = $faker->time();
            $actualTrains->codice_treno = $faker->unique()->ean8();
            $actualTrains->numero_carrozze = $faker->numberBetween(1,10);
            $actualTrains->in_orario = $faker->boolean;
            $actualTrains->cancellato = $faker->boolean;
            $actualTrains->save();
        }
    }
}
