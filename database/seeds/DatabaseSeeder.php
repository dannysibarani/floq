<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /**
            FIX TABLE : Roles, Permission, Policies and Resources
        **/
        $this->call(RolesTableSeeder::class); 
        //$this->call(PermissionsTableSeeder::class); 
        //$this->call(PermissionRoleTableSeeder::class);         
        
        $this->call(PoliciesTableSeeder::class);
        $this->call(ResourcesTableSeeder::class); 
        $this->call(PolicyResourceTableSeeder::class); 

        /**
            USER: create an account by themself and as default the ROLE should be a MEMBER
            or if roles=null then it should be member
        **/
        $this->call(UsersTableSeeder::class);

        /**
            CREATE USER = SUPER ADMINISTRATOR
        **/
        $this->call(SuperAdministratorSeeder::class);

        /**
            SUPER_ADMINISTRATOR assign user as an Administrator
        **/
        $this->call(SuperAdministratorCreateAdminSeeder::class);

        /**
            Create Corporation and link to users, Profile & Contacts
        **/
        $this->call(UserProfilesTableSeeder::class); 
        $this->call(UserContactsTableSeeder::class); 
        $this->call(CorporationsTableSeeder::class); 

        /**
            ADMINISTRATOR Create a PROJECT
        **/
        $this->call(ProjectsTableSeeder::class);

        /**
            ADMINISTRATOR assign team-members to a Project
        **/
        $this->call(ProjectUserTableSeeder::class);

        /**
            ADMINISTRATOR create PROJECT'S ROLES
        **/
        $this->call(ProjectRolesTableSeeder::class);

        /**
            ADMINISTRATOR create a PROJECT'S ROLES for every team-members
        **/
        $this->call(ProjectRoleUserTableSeeder::class);

        /**
            ADMINISTRATOR CREATE (for custom projec's role) or UPDATE RESOURCE'S POLICY for every PROJECT'S ROLES 
            and ADMINISTRATOR TASK is DONE
        **/
        //ALREADY IMPLEMENT IN OBSERVER
        //$this->call(PolicyResourceRoleTableSeeder::class);

        /**
            Project Manager = Create Project Charter
        **/
        //1. Project Charter
        $this->call(ProjectChartersTableSeeder::class); 
        //2. Project Charter POSC (Projct Objective vs Success Criteria)
        $this->call(ProjectCharterPoscsTableSeeder::class); 
        //3. Project Charter Schedule
        $this->call(ProjectCharterSchedulesTableSeeder::class); 
        //4. Project Charter Authority
        $this->call(ProjectCharterAuthoritiesTableSeeder::class); 
        //5. Project Charter Approvals
        //$this->call(ProjectCharterApprovalsTableSeeder::class); 
        $this->call(ApprovalsTableSeeder::class); 

        /**
            Project Manager = Create Stakeholder Register
        **/
        $this->call(StakeholderRegistersTableSeeder::class);

        /**
            Project Manager = Create Stakeholder Analysis
        **/
        $this->call(StakeholderAnalysesTableSeeder::class);


        /**
            FIX TABLE (Requirement ): Categories, Phases, Priorities, and Verifications
        **/
        $this->call(RequirementCategoriesTableSeeder::class);
        $this->call(RequirementPhasesTableSeeder::class); 
        $this->call(RequirementPrioritiesTableSeeder::class); 
        $this->call(RequirementVerificationsTableSeeder::class); 

        /**
            Project Manager = Create Requirement  and Requirement Traceability Matrixes
        **/
        $this->call(RequirementsTableSeeder::class);
        $this->call(RequirementTraceabilityMatrixes::class); 

        /**
            Project Manager = Create Project Scope Statement
        **/
        $this->call(ProjectScopeStatementsTableSeeder::class);

        /**
            Project Manager = Create Project WBS
        **/
        $this->call(WbsResourcesTableSeeder::class); 
        $this->call(WbsesTableSeeder::class);




        /**
            Project Manager = Create Risk Register
        **/
        $this->call(RiskRegistersTableSeeder::class); 

        /**
            Project Manager = Create Quality Metric
        **/
        $this->call(QualityMetricsTableSeeder::class); 

        /**
            Project Manager = Create Stakeholder Engagement Assessment
        **/
        $this->call(StakeholderEngAssesTableSeeder::class);

        /**
            Project Manager = Create Communication Management Plan
        **/
        $this->call(ComManPlansTableSeeder::class);
    }
}
