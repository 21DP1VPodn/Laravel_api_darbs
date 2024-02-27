<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kursi;

class KursuController extends Controller
{
    public function Index() {
        return response()->json(Kursi::all());
    }

    public function Store(Request $request) {
       $validated = $request -> validate([
            "nosaukums" => "required| max: 255",
            "paskaidrojosais_text" => "required",
            "banera_adrese" => "required| max: 255",
            "cilveku_skaits" => "required| integer"
        ]);

       $Dati =  Kursi::create($validated);
        return response()->json($Dati);
    }
}
