<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class IndexController extends Controller
{
    public function index(){
        $items = Http::get('https://barang-pesta.herokuapp.com/')
        ->json()['data'];
        $mcs = Http::get('https://emp-mc.herokuapp.com/')
        ->json()['data'];
        

        return view('index', [
            'mcs' => $mcs,
            'items' => $items,
        ]);
    }
}
