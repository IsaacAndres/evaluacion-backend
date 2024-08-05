<?php

namespace App\Http\Controllers;

use App\Models\Calle;
use App\Http\Requests\StoreCalleRequest;
use App\Http\Requests\UpdateCalleRequest;
use App\Http\Resources\CalleResource;
use Illuminate\Http\Request;

class CallesController extends Controller
{
    public function index(Request $request)
    {
        $ciudadId = $request->ciudad_id;

        $calles = Calle::when($ciudadId, function($query) use ($ciudadId) {
            return $query->where('ciudad_id', $ciudadId);;
        })->get();

        return response()->json([
            'data' => CalleResource::collection($calles)
        ]);
    }

    public function store(StoreCalleRequest $request)
    {
        return response()->json([
            'data' => Calle::create($request->validated())
        ]);
    }

    public function update(UpdateCalleRequest $request, Calle $calle)
    {
        $calle->update($request->validated());

        return response()->json([
            'data' => $calle
        ]);
    }
    
    public function destroy(Calle $calle)
    {
        $calle->delete();
        return response()->noContent();
    }
}
