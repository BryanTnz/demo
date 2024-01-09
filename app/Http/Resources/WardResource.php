<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WardResource extends JsonResource
{
    
    public function toArray(Request $request): array
    {
        // Se procede a definir la estructura de la respuesta de la petición
        // https://laravel.com/docs/9.x/eloquent-resources#introduction
        return [
            'name' => $this->name,
            'location' => $this->location,
            'description' => $this->description,
            'state' => $this->state,
            // https://carbon.nesbot.com/docs/
            'created_at' => $this->created_at->toDateTimeString(),
            // https://laravel.com/docs/9.x/eloquent-resources#resource-collections
            'guards' => UserResource::collection($this->users)
        ];


    }
}
