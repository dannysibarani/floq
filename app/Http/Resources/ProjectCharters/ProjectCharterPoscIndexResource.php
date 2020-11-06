<?php

namespace App\Http\Resources\ProjectCharters;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectCharterPoscIndexResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'po_scope' => $this->po_scope, 
            'po_time' => $this->po_time, 
            'po_cost' => $this->po_cost, 
            'po_other' => $this->po_other, 
            'sc_scope' => $this->sc_scope, 
            'sc_time' => $this->sc_time, 
            'sc_cost' => $this->sc_cost, 
            'sc_other' => $this->sc_other, 
        ]; 
    }
}
