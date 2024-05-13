<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train; //aggiungo il modello Train perchè non è incluso 

class TrainsSeeder extends Seeder
{

    public function run() // nella funzione run() aggiungo un array su cui vado a ciclare per creare nuovi elementi
    {
        $dataTrains = [
            [
                'agency' => 'Agenzia',
                'departure_station' => 'StazionePartenza',
                'destination' => 'Destinazione',
                'departure_time' => '08:00',
                'arrival_time' => '10:30',
                'train_code' => 'ABC123',
                'carriage_number' => 3,
                'on_time' => true,
                'price' => 25.99,
                'is_deleted' => false,
            ],
        ];


        foreach ($dataTrains as $train) {
            $newTrain = new Train();
            $newTrain->agency = $train['agency'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->destination = $train['destination'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->carriage_number = $train['carriage_number'];
            $newTrain->on_time = $train['on_time'];
            $newTrain->price = $train['price'];
            $newTrain->is_deleted = $train['is_deleted'];
            $newTrain->save(); // non dimenticarti di salvare l'elemento perchè altrimenti non verrà aggiungo al DB
        }
    }
}

//N.B 
//1- Esegui il comando php artisan make:seeder "TrainsSeeder" per crearti il seeder da utilizzare "TrainsSeeder" è il nome del tuo seeder, stai attento
//2- Esegui il comando php artisan db:seed --class=TrainsSeeder per eseguire il run() e trasferire i dati al DB.