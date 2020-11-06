<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;



class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        'App\Models\Project' => 'App\Policies\ProjectPolicy', 

        'App\Models\ProjectCharter\ProjectCharter' => 'App\Policies\ProjectCharters\ProjectCharterPolicy', 

        'App\Models\Stakeholder' => 'App\Policies\StakeholderPolicy', 
        'App\Models\ProjectRole' => 'App\Policies\ProjectRolePolicy', 
        'App\Models\Approval' => 'App\Policies\ApprovalPolicy', 
        'App\Models\Resource' => 'App\Policies\ResourcePolicy', 
        'App\Models\User' => 'App\Policies\UserPolicy', 

        'App\Models\StakeholderRegister' => 'App\Policies\StakeholderRegisterPolicy', 
        'App\Models\StakeholderAnalysis' => 'App\Policies\StakeholderAnalysisPolicy',

        'App\Models\Requirement\RequirementPhase' => 'App\Policies\Requirements\RequirementPhasePolicy',
        'App\Models\Requirement\RequirementPriority' => 'App\Policies\Requirements\RequirementPriorityPolicy',
        'App\Models\Requirement\RequirementCategory' => 'App\Policies\Requirements\RequirementCategoryPolicy',
        'App\Models\Requirement\RequirementVerification' => 'App\Policies\Requirements\RequirementVerificationPolicy',
        'App\Models\Requirement\Requirement' => 'App\Policies\Requirements\RequirementPolicy',

        'App\Models\ProjectScopeStatement' => 'App\Policies\ProjectScopeStatementPolicy',
        'App\Models\RiskRegister' => 'App\Policies\RiskRegisterPolicy',
        'App\Models\QualityMetric' => 'App\Policies\QualityMetricPolicy',
        'App\Models\StakeholderEngAss' => 'App\Policies\StakeholderEngAssPolicy',
        'App\Models\ComManPlan' => 'App\Policies\ComManPlanPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
