<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ItemController extends Controller
{
    public function index(){
        $items = Http::get('https://barang-pesta.herokuapp.com/')
        ->json()['data'];


        return view('list-barang', [
            'items' => $items,
        ]);
    }
}
