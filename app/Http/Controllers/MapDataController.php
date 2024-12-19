<?php

namespace App\Http\Controllers;

use App\Models\Marker;
use App\Models\Polygon;
use Illuminate\Http\Request;


class MapDataController extends Controller
{
    // Mendapatkan semua marker dalam bentuk JSON
    public function getMarkers()
    {
        return response()->json(Marker::all());
    }

    // Mendapatkan semua poligon dalam bentuk JSON
    public function getPolygons()
    {
        return response()->json(Polygon::all());
    }

    // Menyimpan marker ke database
    public function storeMarker(Request $request)
    {
        $marker = Marker::create($request->all());
        return response()->json($marker);
    }

    // Menyimpan poligon ke database
    public function storePolygon(Request $request)
    {
        $polygon = Polygon::create([
            'coordinates' => json_encode($request->coordinates),
        ]);
        return response()->json($polygon);
    }

  //delete mareker
    public function deleteMarker($id)
    {
        $marker = Marker::find($id);
        $marker->delete();
        return response()->json($marker);
    }

    //delete polygon
    public function deletePolygon($id)
    {
        $polygon = Polygon::find($id);
        $polygon->delete();
        return response()->json($polygon);
    }
}
