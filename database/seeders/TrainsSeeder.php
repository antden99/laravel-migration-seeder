<?php

namespace Database\Seeders;

use Carbon\Carbon; //Carbon è inclusa in Laravel e può essere utilizzata per lavorare con data e ora
use Illuminate\Database\Seeder;
use Faker\Generator as Faker; //per usare Faker aggiungi la classe con alias Faker subito dopo Seeder, altrimenti non funziona correttamente
use App\Models\Train; //aggiungo il modello Train perchè non è incluso 

class TrainsSeeder extends Seeder
{

    /*public function run() // nella funzione run() aggiungo un array su cui vado a ciclare per creare nuovi elementi
    {
        $dataTrains = config('db_trains.arrayTrains');


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
    }*/
    public function run(Faker $faker) //aggiungi la classe Faker con parametro $faker
    {
        $dataOdierna = Carbon::now()->toDateTime();  //qui lavoro con l'oggetto Carbon, che restituisce la data e l'ora corrente ma devo trasformarlo in un oggetto DateTime perche datetime beet accetta solo quel tipo di oggetto
        $dataFutura = Carbon::now()->addMonth()->toDateTime();

        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->agency = $faker->randomElement(['Italo', 'Trenitalia', 'Ferrovie Nord Milano']);
            $newTrain->departure_station = $faker->randomElement(['Milano', 'Firenze', 'Venezia', 'Roma', 'Roma Termini', 'Napoli Centrale', 'Bologna', 'Bergamo', 'Agropoli']);
            $newTrain->destination = $faker->randomElement(['Milano', 'Firenze', 'Venezia', 'Roma', 'Roma Termini', 'Napoli Centrale', 'Bologna', 'Bergamo', 'Agropoli']);
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->regexify('[A-Z]{3}[0-4]{2}');
            $newTrain->carriage_number = $faker->numberBetween(1, 20);
            $newTrain->on_time = $faker->boolean();
            $newTrain->price = $faker->randomFloat(2, 10, 100);
            $newTrain->is_deleted = $faker->boolean();
            $newTrain->departure_date = $faker->dateTimeBetween($dataOdierna, $dataFutura)->format('Y-m-d');
            $newTrain->save(); //
        }
    }
}

//N.B 
//1- Esegui il comando php artisan make:seeder "TrainsSeeder" per crearti il seeder da utilizzare "TrainsSeeder" è il nome del tuo seeder, stai attento
//2- Esegui il comando php artisan db:seed --class=TrainsSeeder per eseguire il run() e trasferire i dati al DB.