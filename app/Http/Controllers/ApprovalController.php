<?php

namespace App\Http\Controllers;

use App\Models\Approval;
use Illuminate\Http\Request;

use App\Http\Controllers\Traits\HasProjectRequestKey; 
use App\Http\Controllers\Traits\HasResourceRequestKey; 
use App\Http\Controllers\Traits\HandleDeleteApproval; 

use App\Http\Resources\Approvals\ApprovalIndexResource; 


use App\Models\Project; 


class ApprovalController extends Controller
{
    use HasProjectRequestKey, HasResourceRequestKey, 
        HandleDeleteApproval; 

    public function __construct() {
        $this->middleware(['auth:api']); 
        $this->authorizeResource(Approval::class); 
    }

    public function index(Request $request)
    {
        $this->authorize('viewAny', Approval::class); 

        $project_id = $request->get($this->getRequestKey()); 
        $resource_id = $request->get($this->getRequestKeyResource()); 

        $approvals = Approval::where('project_id', $project_id)
                        ->where('resource_id', $resource_id)
                        ->get(); 

        return ApprovalIndexResource::collection($approvals); 
    }

    /*public function store(Request $request) {
        $project_id = $request->get($this->getRequestKey()); 
        $resource_id = $request->get($this->getRequestKeyResource()); 

        $approval = Approval::make($request->only([
            'signature', 'approved', 'date'
        ])); 

        $approval->save();

        return new ApprovalIndexResource($approval); 
    }*/

    public function show(Approval $approval)
    {
        return new ApprovalIndexResource($approval); 
    }

    public function update(Request $request, Approval $approval)
    {
        $approval->update($request->only([
            'signature', 'approved', 'date'
        ]));

        return new ApprovalIndexResource($approval);
    }

    public function destroy(Approval $approval)
    {
        $this->deleteApproval($approval); 
    }

}
