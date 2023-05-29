<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ShippingController extends Controller
{
    //
    function index(){
        $response = Http::withHeaders([
            'key' => 'b11975225db04e43ea0bf865c52d11cc'
        ])->get('https://api.rajaongkir.com/starter/city');

        $cities = $response['rajaongkir']['results'];

        // dd($cities);
        return view('cek-ongkir',['cities'=>$cities, 'ongkir' => '']);
    }

    function cekOngkir(Request $request){
        // dd($request->all());
        $response = Http::withHeaders([
            'key' => 'b11975225db04e43ea0bf865c52d11cc'
        ])->get('https://api.rajaongkir.com/starter/city');

        $responseCost = Http::withHeaders([
            'key' => 'b11975225db04e43ea0bf865c52d11cc'
        ])->post('https://api.rajaongkir.com/starter/cost',[
            'origin' => $request->origin,
            'destination' => $request->destination,
            'weight' => $request->weight,
            'courier' => $request->courier
        ]);

        // dd($request->all());
        $cities = $response['rajaongkir']['results'];
        $ongkir = $responseCost['rajaongkir'];
        return view('cek-ongkir',['cities'=>$cities, 'ongkir' => $ongkir, 'data' => $request]);

    }
}
