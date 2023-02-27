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
    public function run(): void
    {
        $trains = new Train();
        $trains->data_attuale = '2023 - 02 - 27';
        $trains->data_partenza = '2023 - 02 - 28';
        $trains->azienda = 'Trenitalia';
        $trains->stazione_partenza = 'Roma';
        $trains->stazione_arrivo = 'Milano';
        $trains->orario_partenza = '15:23';
        $trains->orario_arrivo = '20:03';
        $trains->codice_treno = 'ASBIFBNSSFF';
        $trains->n_carrozze = 13;
        $trains->in_orario = true;
        $trains->cancellato = false;
        $trains->save();
    }
}
