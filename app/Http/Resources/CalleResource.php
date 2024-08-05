<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CalleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'region' => [
                'id' => $this->ciudad->provincia->region->id,
                'nombre' => $this->ciudad->provincia->region->nombre,
            ],
            'provincia' => [
                'id' => $this->ciudad->provincia->id,
                'nombre' => $this->ciudad->provincia->nombre,
            ],
            'ciudad' => [
                'id' => $this->ciudad->id,
                'nombre' => $this->ciudad->nombre,
            ],
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
