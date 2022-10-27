<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();
        // return $orders;
        return json_encode($orders);
    }

    public function store(Request $request){
        Order::create([
            'nama_customer' => $request->input('nama_customer'),
            'kontak' => $request->input('kontak'),
            'alamat' => $request->input('alamat'),
            'tanggal_sewa' => $request->input('tanggal_sewa'),
            'tanggal_selesai' => $request->input('tanggal_selesai'),
            'detail_order' => $request->input('detail_order'),
            
        ]);
        $order = $request->input('detail_order');
        $redirect = Http::get('https://wa.me/+6281395904462?text={{ $order }}');
        return $redirect;
        return redirect()->back();
    }
}
