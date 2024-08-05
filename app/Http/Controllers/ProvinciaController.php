<?php

namespace App\Http\Controllers;

use App\Models\Provincia;
use App\Http\Requests\StoreProvinciaRequest;
use App\Http\Requests\UpdateProvinciaRequest;
use Illuminate\Http\Request;

class ProvinciaController extends Controller
{
    public function index(Request $request)
    {
        $regionId = $request->region_id;

        $provincias = Provincia::when($regionId, function($query) use ($regionId) {
            return $query->where('region_id', $regionId);;
        })->get();

        return response()->json([
            'data' => $provincias
        ]);
    }

    public function store(StoreProvinciaRequest $request)
    {
        return response()->json([
            'data' => Provincia::create($request->validated())
        ]);
    }

    public function update(UpdateProvinciaRequest $request, Provincia $provincia)
    {
        $provincia->update($request->validated());

        return response()->json([
            'data' => $provincia
        ]);
    }

    public function destroy(Provincia $provincia)
    {
        $provincia->delete();

        return response()->noContent();
    }
}
