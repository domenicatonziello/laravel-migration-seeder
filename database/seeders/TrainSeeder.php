<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 5; $i++) {
            $trains = new Train();
            $trains->azienda = $faker->company();
            $trains->stazione_partenza = $faker->city();
            $trains->stazione_arrivo = $faker->city();
            $trains->data_partenza = $faker->date();
            $trains->orario_partenza = $faker->time();
            $trains->orario_arrivo = $faker->time();
            $trains->codice_treno = $faker->md5();
            $trains->n_carrozze = $faker->randomDigitNotNull();
            $trains->in_orario = $faker->boolean();
            $trains->cancellato = $faker->boolean();
            $trains->save();
        }
    }
}
