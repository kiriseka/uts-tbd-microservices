<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class McController extends Controller
{
    public function index(){
       
        $mcs = Http::get('https://emp-mc.herokuapp.com/')
        ->json()['data'];
        

        return view('list-mc', [
            'mcs' => $mcs,
        ]);
    }
}
