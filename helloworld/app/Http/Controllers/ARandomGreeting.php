<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Greeting;

class ARandomGreeting extends Controller
{
    public function Getrandomgreeting()
    {
        $listofgreetings = [];
        $listofgreetingsraw = Greeting::all();
        foreach($listofgreetingsraw as $greeting){
            //print_r($greeting['Greetings']);
            array_push($listofgreetings, $greeting['Greetings']);
        }
        //print_r($listofgreetings);
        $randomgreeting = array_rand ($listofgreetings , 1);
        $greeting = $listofgreetings[$randomgreeting];
        return view('arandomgreeting', ['greeting' => $greeting]);
    }
}
