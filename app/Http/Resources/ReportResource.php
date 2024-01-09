<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

use App\Helpers\ImageHelper;

class ReportResource extends JsonResource
{
    
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'image' => ImageHelper::getDiskImageUrl($this->getImagePath()),
            'state' => $this->state,
            'created_by' => new UserResource($this->user),
            'created_at' => $this->created_at->toDateTimeString(),
        ];


    }
}
