<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TrainsController extends Controller
{
    //

    public function index(){

        $currentDate = Carbon::parse('2015-12-12');  //con la data odierna non trova le partenze dei treni, ma ho dovuto inserire una dapa specifica per vdere se funziona

        /*$currentDate = Carbon::now();*/

        $trainList = Train::where('data_partenza', '>=', $currentDate)
                           ->get();
        return view('guest.train.index',compact('trainList'));
    }
}
