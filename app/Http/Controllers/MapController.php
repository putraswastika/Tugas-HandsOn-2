<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapController extends Controller
{
    public function index()
    {
        return view('map');
    }
    
        public function index2()
    {
        return view('tugas1');
    }

    public function index3(){
        return view('latihan2');
    }
    public function profile(){
        return view('profileMenu');
    }
    public function testerView(){
        return view('tester');
    }
    //MENYIMOAN DATA DARI DATABASE DI ENDPOINT /tugas2 DENGAN NAMAN FUNCTION handsOn2

    public function handsOn2() {
        $markers = DB::table('markers')->get(); // Query untuk tabel markers
        $polygons = DB::table('polygons')->get(); // Query untuk tabel polygons
    
        return view('tugas2', [
            'markers' => $markers, 
            'polygons' => $polygons
        ]);
    }
}



