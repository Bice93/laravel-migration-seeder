<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $trains = [
            [
                "name_company" => "Trenitalia",
                "departure_station" => "Mialno Centrale",
                "arrival_station" => "Napoli Centrale",
                "departure_time" => "2022-09-9 12:30:00",
                "arrival_time" => "2022-09-9 18:30:00",
                "train_code" => "9876",
                "number_carriages" => "12",
                "in_time" => true,
                "deleted" => false,
            ],
            [
                "name_company" => "Italo",
                "departure_station" => "Torino",
                "arrival_station" => "Bologna",
                "departure_time" => "2022-09-5 09:15:00",
                "arrival_time" => "2022-09-5 13:20:00",
                "train_code" => "6786",
                "number_carriages" => "14",
                "in_time" => true,
                "deleted" => false,
            ],
            [
                "name_company" => "Italo",
                "departure_station" => "Bologna",
                "arrival_station" => "Roma",
                "departure_time" => "2022-09-9 10:20:00",
                "arrival_time" => "2022-09-9 12:45:00",
                "train_code" => "1289",
                "number_carriages" => "10",
                "in_time" => true,
                "deleted" => false,
            ],
            [
                "name_company" => "Trenitalia",
                "departure_station" => "Como San Giovanni",
                "arrival_station" => "Milano Lambrate",
                "departure_time" => "2022-09-9 14:50:00",
                "arrival_time" => "2022-09-9 15:40:00",
                "train_code" => "5596",
                "number_carriages" => "9",
                "in_time" => true,
                "deleted" => false,
            ],
            [
                "name_company" => "Trenitalia",
                "departure_station" => "Roma Termini",
                "arrival_station" => "Reggio Emilia",
                "departure_time" => "2022-09-15 09:20:00",
                "arrival_time" => "2022-09-15 11:30:00",
                "train_code" => "2376",
                "number_carriages" => "9",
                "in_time" => true,
                "deleted" => false,
            ],
            [
                "name_company" => "Italo",
                "departure_station" => "Reggio Emilia",
                "arrival_station" => "Torino",
                "departure_time" => "2022-09-9 12:15:00",
                "arrival_time" => "2022-09-9 15:20:00",
                "train_code" => "6799",
                "number_carriages" => "14",
                "in_time" => true,
                "deleted" => false,
            ],
            [
                "name_company" => "Trenitalia",
                "departure_station" => "Padova",
                "arrival_station" => "Verona",
                "departure_time" => "2022-09-5 16:15:00",
                "arrival_time" => "2022-09-5 17:00:00",
                "train_code" => "5477",
                "number_carriages" => "15",
                "in_time" => true,
                "deleted" => false,
            ],
        ];

       foreach ($trains as $train){
            $newTrain = new Train();
            $newTrain->name_company = $train['name_company'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->number_carriages = $train['number_carriages'];
            $newTrain->in_time = $train['in_time'];
            $newTrain->deleted = $train['deleted'];
            $newTrain->save();
       }
    }
}
