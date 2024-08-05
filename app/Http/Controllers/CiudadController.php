<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use App\Http\Requests\StoreCiudadRequest;
use App\Http\Requests\UpdateCiudadRequest;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
    
    public function index(Request $request)
    {
        $provinciaId = $request->provincia_id;

        $ciudades = Ciudad::when($provinciaId, function($query) use ($provinciaId) {
            return $query->where('provincia_id', $provinciaId);;
        })->get();

        return response()->json([
            'data' => $ciudades
        ]);
    }
    public function store(StoreCiudadRequest $request)
    {
        return response()->json([
            'data' => Ciudad::create($request->validated())
        ]);
    }
    
    public function update(UpdateCiudadRequest $request, Ciudad $ciudad)
    {
        $ciudad->update($request->validated());

        return response()->json([
            'data' => $ciudad
        ]);
    }

    public function destroy(Ciudad $ciudad)
    {
        $ciudad->delete();
        return response()->noContent();
    }
}
