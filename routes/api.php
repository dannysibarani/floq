<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'auth'], function(){
	Route::post('register', Auth\RegisterController::class);
	Route::post('login', Auth\LoginController::class); 
	Route::get('me', Auth\MeController::class); 
}); 


Route::apiResource('projects', 'ProjectController'); 

Route::apiResource('stakeholders', 'StakeholderController', [
	'parameters' => [
		'stakeholders' => 'user'
	]
]); 

Route::apiResource('project-roles', 'ProjectRoleController'); 
Route::apiResource('users', 'UserController'); 
Route::apiResource('resources', 'ResourceController'); 
Route::apiResource('approvals', 'ApprovalController'); 

/*INITIATING*/
Route::apiResource('project-charters', 'ProjectCharterController'); 
Route::apiResource('stakeholder-registers', 'StakeholderRegisterController'); 
Route::apiResource('stakeholder-analyses', 'StakeholderAnalysisController'); 

/*PLANNING*/
Route::apiResource('requirement-phases', 'Requirements\RequirementPhaseController');
Route::apiResource('requirement-priorities', 'Requirements\RequirementPriorityController');
Route::apiResource('requirement-categories', 'Requirements\RequirementCategoryController'); 
Route::apiResource('requirement-verifications', 'Requirements\RequirementVerificationController'); 
Route::apiResource('requirement-documentations', 'Requirements\RequirementDocumentationController', [
	'parameters' => [
		'requirement-documentations' => 'requirement'
	]
]); 
Route::apiResource('requirement-traceabilities', 'Requirements\RequirementTraceabilityController', [
	'parameters' => [
		'requirement-traceabilities' => 'requirement'
	]
]); 

Route::apiResource('project-scope-statements', 'ProjectScopeStatementController'); 
Route::apiResource('risk-registers', 'RiskRegisterController');
Route::apiResource('quality-metrics', 'QualityMetricController');
Route::apiResource('stakeholder-eng-asses', 'StakeholderEngAssController');
Route::apiResource('com-man-plans', 'ComManPlanController');



/*TESTING*/
use App\Models\Project; 
use App\Models\ProjectRole; 
Route::get('test3', function(){
	$project = Project::find(1); 
	$project->users()->detach(); 
});


use App\Models\User; 
use App\Models\Queries\UserQuery; 
Route::get('test2', function(){
	$project = Project::find(2); 
	$user = User::find(10); 
	$projectRole = ProjectRole::find(8); 
            App\Models\StakeholderEngAss::create([
            	'user_id' => $user->id, 
                'project_id' => $project->id, 
                'project_role_id' => $projectRole->id, 
            ]);
    dd($project->id, $user->id, $projectRole->id); 
});
 
use App\Models\Policy; 
use App\Models\Resource; 
Route::get('tai', function(){
	$pm = ProjectRole::where('name', 'Project Manager')->first(); 
	$policy = Policy::where('name', 'VIEW')->first(); 
	$resource = Resource::where('name', 'PROJECT_CHARTER')->first(); 

	$policyResource = $pm->policyResources()
				->where('policy_id', $policy->id)
				->where('resource_id', $resource->id)
				->first(); 
	dd($policyResource->pivot->is_permitted); 
	return $policyResource; 
});


Route::get('test', function(){
		$project = App\Models\Project::find(1); 

		$user = $project->users()->where('id', 3)->first(); 

		$user->load(['projectRoles']); 

		//return ( collect(new App\Http\Resources\PrivateUserResource($user)) );

		/*$userCollection = collect(new App\Http\Resources\PrivateUserResource($user)); 
		$projectRolesCollection = $userCollection->get('project_roles');

		$projectRolesFiltered = $projectRolesCollection->reject(function($value, $key){
			return $value->project_id != 1; 
		}); 

		return $projectRolesFiltered->all(); */

		$userCollection = collect(new App\Http\Resources\PrivateUserResource($user))
							->get('project_roles')
							->reject(
								function($value, $key) {
									return $value->project_id != 1; 
								}
							)->all(); 
		
		$userCollection = collect(new App\Http\Resources\PrivateUserResource($user))->toArray()
							; /*->reject(
								function($value, $key) {
									return $userColl['project_roles']['id'] == 2; 
								}
							);*/

		return ($userCollection); 

}); 



/*Route::get('test', function(){
	//$schedules = App\Models\ProjectCharter\ProjectCharterSchedule::where('project_charter_id', 1)->get(); 

	$schedules = App\Models\ProjectCharter\ProjectCharter::find(1)->schedules; 

	return App\Http\Resources\ProjectCharters\ProjectCharterScheduleIndexResource::collection($schedules); 
});

use App\Models\User; 
use App\Models\Project; 
use App\Models\ProjectRole; 
//*Not working for User <--> Project <--> ProjectRole (ManyToMany - ManyToMany)
Route::get('hasManyThrough', function(){
	$user = User::find(1); 
	$projectRoles = $user->hasManyThrough(ProjectRole::class, Project::class)->get(); 
	return $projectRoles; 
}); */



//use App\Models\RequirementDocumentation\RequirementDocumentationVerification; 
//use App\Models\RequirementDocumentation\RequirementDocumentation; 
//Route::get('test', function(){
	//$projectCharter = App\Models\ProjectCharter\ProjectCharter::find(1); 

	//return ($projectCharter->project()->first()->users()->get()); 
	//return App\Http\Resources\PrivateUserResource::collection($projectCharter->project->users); 
	//return $projectCharter->project->users->first()->profile;
	//$users = App\Models\User::get(); 
	//return App\Http\Resources\Users\UserRoleResource::collection($users); 
	
	//$users->load(['contacts', 'profile', 'projectRoles']); 
	//return App\Http\Resources\PrivateUserResource::collection($users);  


		/*$project = App\Models\Project::where('name', 'PIAMSBBFP')->first(); 

		$user = App\Models\User::where('name', 'Palti Hutapea')->first(); 
		$users = $project->users()->get(); 
		$roles = $users->find($user->id)->projectRoles()->get(); 
		return($roles); */

//	$verification = RequirementDocumentationVerification::where('name', 'INSPECTION')->first();
//	$reqDoc = RequirementDocumentation::where('sid', 'R001')->first(); 

//	return ($reqDoc->verifications); 
	//->verifications()->attach($verification); 
//}); 


