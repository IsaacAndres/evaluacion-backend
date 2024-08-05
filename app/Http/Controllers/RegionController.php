<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Http\Requests\StoreRegionRequest;
use App\Http\Requests\UpdateRegionRequest;

class RegionController extends Controller
{
    public function index()
    {
        return response()->json([
            'data' => Region::all()
        ]);
    }

    public function store(StoreRegionRequest $request)
    {
        return response()->json([
            'data' => Region::create($request->validated())
        ]);
    }

    public function update(UpdateRegionRequest $request, Region $region)
    {
        $region->update($request->validated());

        return response()->json([
            'data' => $region
        ]);
    }

    public function destroy(Region $region)
    {
        $region->delete();

        return response()->noContent();
    }
}
