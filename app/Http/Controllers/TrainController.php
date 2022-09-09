<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //
    public function index(){
        //$trains = Train::all();
        $trains = Train::where('departure_time', '>=', '2022-09-09')->get();
        //dd($trains);
        return view('trains.index', compact('trains'));
    }


}
