<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvaController extends Controller
{
    public function calculate(){
        $calcolo = 5 + 5;
        return $calcolo;
    }

    public function fetchData(Request $request){
        return 'Data ' . $request->input('data');
    }
}
