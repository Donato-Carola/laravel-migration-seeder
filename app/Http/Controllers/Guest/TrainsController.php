<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    //

    public function index(){

       $trainList = Train::all();

        return view('guest.train.index',compact('trainList'));
    }
}
