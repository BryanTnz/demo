<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JailResource extends JsonResource
{
    
    public function toArray(Request $request): array
    {
        // Se procede a definir la estructura de la respuesta de la petición
        // https://laravel.com/docs/9.x/eloquent-resources#introduction
        return [
            'name' => $this->name,
            'code' => $this->code,
            'type' => $this->type,
            'capacity' => $this->capacity,
            'state' => $this->state,
            'description' => $this->description,
            // https://carbon.nesbot.com/docs/
            'created_at' => $this->created_at->toDateTimeString(),
            'ward' => $this->ward,
            // https://laravel.com/docs/9.x/eloquent-resources#resource-collections
            'prisoners' => UserResource::collection($this->users),
        ];


    }
}
