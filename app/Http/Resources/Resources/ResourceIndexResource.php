<?php

namespace App\Http\Resources\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResourceIndexResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name' => $this->name, 
            'description' => $this->description, 
        ];
    }
}
