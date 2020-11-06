<?php

use Illuminate\Database\Seeder;


use App\Models\Project; 
use App\Models\Wbs; 

use App\Models\Enums\WbsType; 

class WbsesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$project = Project::where('name', 'PIAMSBBFP')->first(); 

    	$wbs_1 = Wbs::create([
    		'project_id' => $project->id, 
    		'number' => 1, 
    		'parent_id' => null, 
    		'name' => 'Mandiri Social Banking App', 
    	]); 

    	/**
    		1 LEVEL under $wbs_1
    	**/
    	$wbs_1_1 = Wbs::create([
    		'project_id' => $project->id, 
    		'number' => 1, 
    		'parent_id' => $wbs_1->id, 
    		'name' => 'Project Launch', 
    	]); 

    	$wbs_1_2 = Wbs::create([
    		'project_id' => $project->id, 
    		'number' => 2, 
    		'parent_id' => $wbs_1->id, 
    		'name' => 'Resource Acquiring', 
    	]); 

    	$wbs_1_3 = Wbs::create([
    		'project_id' => $project->id, 
    		'number' => 3, 
    		'parent_id' => $wbs_1->id, 
    		'name' => 'Requirement Defenition', 
    	]); 

    	$wbs_1_4 = Wbs::create([
    		'project_id' => $project->id, 
    		'number' => 4, 
    		'parent_id' => $wbs_1->id, 
    		'name' => 'Detailed Design', 
    	]); 

    	$wbs_1_5 = Wbs::create([
    		'project_id' => $project->id, 
    		'number' => 5, 
    		'parent_id' => $wbs_1->id, 
    		'name' => 'System Configuration', 
    	]); 

    	$wbs_1_6 = Wbs::create([
    		'project_id' => $project->id, 
    		'number' => 6, 
    		'parent_id' => $wbs_1->id, 
    		'name' => 'System Acquiring & Installing', 
    	]); 

    	$wbs_1_7 = Wbs::create([
    		'project_id' => $project->id, 
    		'number' => 7, 
    		'parent_id' => $wbs_1->id, 
    		'name' => 'Application Development', 
    	]); 

    	$wbs_1_8 = Wbs::create([
    		'project_id' => $project->id, 
    		'number' => 8, 
    		'parent_id' => $wbs_1->id, 
    		'name' => 'Data Migration', 
    	]); 

    	$wbs_1_9 = Wbs::create([
    		'project_id' => $project->id, 
    		'number' => 9, 
    		'parent_id' => $wbs_1->id, 
    		'name' => 'System Documentation', 
    	]); 

    	$wbs_1_10 = Wbs::create([
    		'project_id' => $project->id, 
    		'number' => 10, 
    		'parent_id' => $wbs_1->id, 
    		'name' => 'Testing', 
    	]); 

    	$wbs_1_11 = Wbs::create([
    		'project_id' => $project->id, 
    		'number' => 11, 
    		'parent_id' => $wbs_1->id, 
    		'name' => 'Soft Launching', 
    	]); 

    	$wbs_1_12 = Wbs::create([
    		'project_id' => $project->id, 
    		'number' => 12, 
    		'parent_id' => $wbs_1->id, 
    		'name' => 'Training', 
    	]); 

    	$wbs_1_13 = Wbs::create([
    		'project_id' => $project->id, 
    		'number' => 13, 
    		'parent_id' => $wbs_1->id, 
    		'name' => 'Product Launching', 
    	]); 

    	$wbs_1_14 = Wbs::create([
    		'project_id' => $project->id, 
    		'number' => 14, 
    		'parent_id' => $wbs_1->id, 
    		'name' => 'Closing', 
    	]); 

    	/**
    		****1 LEVEL under $wbs_1_1
    	**/
    	$wbs_1_1_1 = Wbs::create([
    		'project_id' => $project->id, 
    		'number' => 1, 
    		'parent_id' => $wbs_1_1->id, 
    		'name' => 'Initial Review', 
    	]); 

    	$wbs_1_1_2 = Wbs::create([
    		'project_id' => $project->id, 
    		'number' => 2, 
    		'parent_id' => $wbs_1_1->id, 
    		'name' => 'Project Estimation', 
    	]); 

    	$wbs_1_1_3 = Wbs::create([
    		'project_id' => $project->id, 
    		'number' => 3, 
    		'parent_id' => $wbs_1_1->id, 
    		'name' => 'Project Planning', 
    	]);     

    	$wbs_1_1_4 = Wbs::create([
    		'project_id' => $project->id, 
    		'number' => 4, 
    		'parent_id' => $wbs_1_1->id, 
    		'name' => 'Man-power Planning', 
    	]);

    	$wbs_1_1_5 = Wbs::create([
    		'project_id' => $project->id, 
    		'number' => 5, 
    		'parent_id' => $wbs_1_1->id, 
    		'name' => 'Initial HW/SW Planning', 
    	]);

    	$wbs_1_1_6 = Wbs::create([
    		'project_id' => $project->id, 
    		'number' => 6, 
    		'parent_id' => $wbs_1_1->id, 
    		'name' => 'Approval & Go Head', 
    	]);  	


        /**
            ****1 LEVEL under $wbs_1_2
        **/
        $wbs_1_2_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_2->id, 
            'name' => 'Man Power', 
        ]); 

        $wbs_1_2_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_2->id, 
            'name' => 'Workspace and Equipment', 
        ]); 


        /**
            ****1 LEVEL under $wbs_1_3
        **/
        $wbs_1_3_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_3->id, 
            'name' => 'Current System', 
        ]); 

        $wbs_1_3_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_3->id, 
            'name' => 'Business Requirements', 
        ]); 

        $wbs_1_3_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_3->id, 
            'name' => 'System Requirements', 
        ]); 

        $wbs_1_3_4 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 4, 
            'parent_id' => $wbs_1_3->id, 
            'name' => 'Testing Requirements', 
        ]); 

        $wbs_1_3_5 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 5, 
            'parent_id' => $wbs_1_3->id, 
            'name' => 'Training Requirements', 
        ]); 


        /**
            ****1 LEVEL under $wbs_1_4
        **/
        $wbs_1_4_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_4->id, 
            'name' => 'Current System', 
        ]); 

        $wbs_1_4_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_4->id, 
            'name' => 'Proposed System', 
        ]); 

        $wbs_1_4_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_4->id, 
            'name' => 'Review Proposed System', 
        ]); 


        /**
            ****1 LEVEL under $wbs_1_5
        **/
        $wbs_1_5_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_5->id, 
            'name' => 'HW Configuration', 
        ]); 

        $wbs_1_5_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_5->id, 
            'name' => 'SW Configuration', 
        ]); 

        $wbs_1_5_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_5->id, 
            'name' => 'Review and signoff', 
        ]); 

        /**
            ****1 LEVEL under $wbs_1_6
        **/
        $wbs_1_6_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_6->id, 
            'name' => 'Hardware', 
        ]); 

        $wbs_1_6_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_6->id, 
            'name' => 'Software', 
        ]); 


        /**
            ****1 LEVEL under $wbs_1_7
        **/
        $wbs_1_7_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_7->id, 
            'name' => 'Development Planning', 
        ]); 

        $wbs_1_7_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_7->id, 
            'name' => 'Initial Database', 
        ]); 

        $wbs_1_7_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_7->id, 
            'name' => 'Prototype', 
        ]); 

        $wbs_1_7_4 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 4, 
            'parent_id' => $wbs_1_7->id, 
            'name' => 'Common Routine / Modules / Templates', 
        ]); 

        $wbs_1_7_5 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 5, 
            'parent_id' => $wbs_1_7->id, 
            'name' => 'Modules / Programs / Units', 
        ]); 

        $wbs_1_7_6 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 6, 
            'parent_id' => $wbs_1_7->id, 
            'name' => 'Application Integration', 
        ]); 

        /**
            ****1 LEVEL under $wbs_1_8
        **/
        $wbs_1_8_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_8->id, 
            'name' => 'Build', 
        ]); 

        $wbs_1_8_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_8->id, 
            'name' => 'Test', 
        ]); 

        $wbs_1_8_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_8->id, 
            'name' => 'Review and signoff', 
        ]); 

        /**
            ****1 LEVEL under $wbs_1_9
        **/
        $wbs_1_9_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_9->id, 
            'name' => 'Source Code', 
        ]); 

        $wbs_1_9_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_9->id, 
            'name' => 'Operation Manual', 
        ]); 

        $wbs_1_9_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_9->id, 
            'name' => 'User Manual', 
        ]); 

        /**
            ****1 LEVEL under $wbs_1_10
        **/
        $wbs_1_10_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_10->id, 
            'name' => 'Build Test Planning', 
        ]); 

        $wbs_1_10_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_10->id, 
            'name' => 'System Testing', 
        ]); 

        $wbs_1_10_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_10->id, 
            'name' => 'Integration Testing', 
        ]); 

        $wbs_1_10_4 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 4, 
            'parent_id' => $wbs_1_10->id, 
            'name' => 'Regression / Performance Testing', 
        ]); 

        $wbs_1_10_5 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 5, 
            'parent_id' => $wbs_1_10->id, 
            'name' => 'User Acceptance', 
        ]); 

        /**
            ****1 LEVEL under $wbs_1_12
        **/
        $wbs_1_12_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_12->id, 
            'name' => 'Training Development', 
        ]); 

        $wbs_1_12_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_12->id, 
            'name' => 'Training Delivery', 
        ]); 






        /**
            ****1 LEVEL under $wbs_1_1_1
        **/
        $wbs_1_1_1_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_1_1->id, 
            'name' => 'Review Business Case / Statement of Work', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_1_1_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_1_1->id, 
            'name' => 'Establish Business Objectives', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_1_1_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_1_1->id, 
            'name' => 'Determine Technical Complexity', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_1_1_4 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 4, 
            'parent_id' => $wbs_1_1_1->id, 
            'name' => 'Identify Target Audience', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_1_1_5 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 5, 
            'parent_id' => $wbs_1_1_1->id, 
            'name' => 'Establish Success Criteria & Measurables', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        /**
            ****1 LEVEL under $wbs_1_1_2
        **/
        $wbs_1_1_2_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_1_2->id, 
            'name' => 'Identify skill set needed', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_1_2_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_1_2->id, 
            'name' => 'Identify (Initial) HW / SW environment', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_1_2_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_1_2->id, 
            'name' => 'Develop time & effort estimates', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_1_2_4 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 4, 
            'parent_id' => $wbs_1_1_2->id, 
            'name' => 'Develop Man Pow er Budget', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_1_2_5 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 5, 
            'parent_id' => $wbs_1_1_2->id, 
            'name' => 'Develop Hardw are and Softw are Budget', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_1_2_6 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 6, 
            'parent_id' => $wbs_1_1_2->id, 
            'name' => 'Develop / Review / Update Initial Budget', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_1_2_7 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 7, 
            'parent_id' => $wbs_1_1_2->id, 
            'name' => 'Finalize Project Charter', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 


        /**
            ****1 LEVEL under $wbs_1_1_3
        **/
        $wbs_1_1_3_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_1_3->id, 
            'name' => 'Organization', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_1_3_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_1_3->id, 
            'name' => 'Communication Plan', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_1_3_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_1_3->id, 
            'name' => 'Project Quality Plan', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_1_3_4 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 4, 
            'parent_id' => $wbs_1_1_3->id, 
            'name' => 'Data Migration Plan', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_1_3_5 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 5, 
            'parent_id' => $wbs_1_1_3->id, 
            'name' => 'Integration Plan', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_1_3_6 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 6, 
            'parent_id' => $wbs_1_1_3->id, 
            'name' => 'Implementation Plan', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_1_3_7 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 7, 
            'parent_id' => $wbs_1_1_3->id, 
            'name' => 'Test Plan', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_1_3_8 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 8, 
            'parent_id' => $wbs_1_1_3->id, 
            'name' => 'Training Plan', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_1_3_9 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 9, 
            'parent_id' => $wbs_1_1_3->id, 
            'name' => 'Support & Maintenance Plan', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        /**
            ****1 LEVEL under $wbs_1_1_4
        **/
        $wbs_1_1_4_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_1_4->id, 
            'name' => 'Detail skill-set list', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_1_4_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_1_4->id, 
            'name' => 'Identify internal resources', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_1_4_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_1_4->id, 
            'name' => 'Man-pow er count', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_1_4_4 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 4, 
            'parent_id' => $wbs_1_1_4->id, 
            'name' => 'Identify Sources/Get Quotes', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        /**
            ****1 LEVEL under $wbs_1_1_5
        **/
        $wbs_1_1_5_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_1_5->id, 
            'name' => 'Development / Testing / Production environment details', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_1_5_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_1_5->id, 
            'name' => 'Identify Sources/Get Quotes', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 


        /**
            ****1 LEVEL under $wbs_1_1_6
        **/
        $wbs_1_1_6_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_1_6->id, 
            'name' => 'Review Project Work Plan', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_1_6_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_1_6->id, 
            'name' => 'Check project plan against client calendar', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_1_6_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_1_6->id, 
            'name' => 'Present revised business case and plan', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_1_6_4 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 4, 
            'parent_id' => $wbs_1_1_6->id, 
            'name' => 'Get Approval for Project Planning', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 


        /**
            ****1 LEVEL under $wbs_1_2_1
        **/
        $wbs_1_2_1_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_2_1->id, 
            'name' => 'Send PO/Sign Contract', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_2_1_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_2_1->id, 
            'name' => 'Get Team On Board', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        /**
            ****1 LEVEL under $wbs_1_2_2
        **/
        $wbs_1_2_2_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_2_2->id, 
            'name' => 'Identify need', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_2_2_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_2_2->id, 
            'name' => 'Get Work space & equipment for team', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        /**
            ****1 LEVEL under $wbs_1_3_1
        **/
        $wbs_1_3_1_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_3_1->id, 
            'name' => 'Review / Document business functions', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_3_1_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_3_1->id, 
            'name' => 'Review / Document system functions', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 


        /**
            ****1 LEVEL under $wbs_1_3_2
        **/
        $wbs_1_3_2_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_3_2->id, 
            'name' => 'Schedule client interviews', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_3_2_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_3_2->id, 
            'name' => 'Identify hi-level business functions & requirements', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_3_2_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_3_2->id, 
            'name' => 'Detailed business requirements', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_3_2_4 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 4, 
            'parent_id' => $wbs_1_3_2->id, 
            'name' => 'Document business requirements', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_3_2_5 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 5, 
            'parent_id' => $wbs_1_3_2->id, 
            'name' => 'Review business requirements', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_3_2_6 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 6, 
            'parent_id' => $wbs_1_3_2->id, 
            'name' => 'Business Requirement sign-off', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 


        /**
            ****1 LEVEL under $wbs_1_3_2_3
        **/
        $wbs_1_3_2_3_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_3_2_3->id, 
            'name' => 'Business rules', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_3_2_3_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_3_2_3->id, 
            'name' => 'Input / Output requirements', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_3_2_3_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_3_2_3->id, 
            'name' => 'Processing / Computing requirements', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_3_2_3_4 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 4, 
            'parent_id' => $wbs_1_3_2_3->id, 
            'name' => 'Storage / Archival', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 


        /**
            ****1 LEVEL under $wbs_1_3_3
        **/
        $wbs_1_3_3_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_3_3->id, 
            'name' => 'Identify technical requirements', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_3_3_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_3_3->id, 
            'name' => 'Identify integration requirements', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_3_3_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_3_3->id, 
            'name' => 'Identify performance requirements', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_3_3_4 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 4, 
            'parent_id' => $wbs_1_3_3->id, 
            'name' => 'Develop User Interface requirements', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_3_3_5 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 5, 
            'parent_id' => $wbs_1_3_3->id, 
            'name' => 'Document system requirements', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_3_3_6 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 6, 
            'parent_id' => $wbs_1_3_3->id, 
            'name' => 'Reveiw system requirements', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_3_3_7 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 7, 
            'parent_id' => $wbs_1_3_3->id, 
            'name' => 'System requirement signoff', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        /**
            ****1 LEVEL under $wbs_1_3_4
        **/
        $wbs_1_3_4_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_3_4->id, 
            'name' => 'User Acceptance Criteria', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        /**
            ****1 LEVEL under $wbs_1_3_5
        **/
        $wbs_1_3_5_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_3_5->id, 
            'name' => 'Identify training needs', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 


        /**
            ****1 LEVEL under $wbs_1_4_1
        **/
        $wbs_1_4_1_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_4_1->id, 
            'name' => 'Reveiw / Document current state design', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_4_1_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_4_1->id, 
            'name' => 'Review / Document process model', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_4_1_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_4_1->id, 
            'name' => 'Review / Document data architecture', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_4_1_4 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 4, 
            'parent_id' => $wbs_1_4_1->id, 
            'name' => 'Review / Document application architecture', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_4_1_5 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 5, 
            'parent_id' => $wbs_1_4_1->id, 
            'name' => 'Review / Document technical architecture', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 


        /**
            ****1 LEVEL under $wbs_1_4_2
        **/
        $wbs_1_4_2_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_4_2->id, 
            'name' => 'Process Model', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_4_2_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_4_2->id, 
            'name' => 'Entity Relationship', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_4_2_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_4_2->id, 
            'name' => 'Data Flow', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_4_2_4 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 4, 
            'parent_id' => $wbs_1_4_2->id, 
            'name' => 'Data modeling', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_4_2_5 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 5, 
            'parent_id' => $wbs_1_4_2->id, 
            'name' => 'Define data architecture', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_4_2_6 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 6, 
            'parent_id' => $wbs_1_4_2->id, 
            'name' => 'Define application architecture', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_4_2_7 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 7, 
            'parent_id' => $wbs_1_4_2->id, 
            'name' => 'Define technical architecture', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 


        /**
            ****1 LEVEL under $wbs_1_4_3
        **/
        $wbs_1_4_3_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_4_3->id, 
            'name' => 'Review system design', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_4_3_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_4_3->id, 
            'name' => 'Proposed design signoff', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 


        /**
            ****1 LEVEL under $wbs_1_5_1
        **/
        $wbs_1_5_1_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_5_1->id, 
            'name' => 'Develop hardw are configuration', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_5_1_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_5_1->id, 
            'name' => 'Development / Testing / Production environment details', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_5_1_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_5_1->id, 
            'name' => 'Review and signoff', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 


        /**
            ****1 LEVEL under $wbs_1_5_2
        **/
        $wbs_1_5_2_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_5_2->id, 
            'name' => 'Design SW configuration', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_5_2_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_5_2->id, 
            'name' => 'Development / Testing / Production environment details', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 



        /****1 LEVEL under $wbs_1_6_1
        **/
        $wbs_1_6_1_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_6_1->id, 
            'name' => 'Identify Sources/Get Quotes', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_6_1_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_6_1->id, 
            'name' => 'Send PO/Sign Contract', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_6_1_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_6_1->id, 
            'name' => 'Acquire, install & test HW For Development', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_6_1_4 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 4, 
            'parent_id' => $wbs_1_6_1->id, 
            'name' => 'Acquire, install & test HW For Testing', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_6_1_5 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 5, 
            'parent_id' => $wbs_1_6_1->id, 
            'name' => 'Acquire HW For Production', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 


        /****1 LEVEL under $wbs_1_6_2
        **/
        $wbs_1_6_2_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_6_2->id, 
            'name' => 'Identify Sources/Get Quotes', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_6_2_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_6_2->id, 
            'name' => 'Send PO/Sign Contract', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_6_2_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_6_2->id, 
            'name' => 'Acquire, install & test SW For Development', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_6_2_4 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 4, 
            'parent_id' => $wbs_1_6_2->id, 
            'name' => 'Acquire, install & test SW For Testing', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_6_2_5 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 5, 
            'parent_id' => $wbs_1_6_2->id, 
            'name' => 'Acquire SW For Production', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        /****1 LEVEL under $wbs_1_7_1
        **/
        $wbs_1_7_1_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_7_1->id, 
            'name' => 'Development module plan', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 


        /****1 LEVEL under $wbs_1_7_2
        **/
        $wbs_1_7_2_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_7_2->id, 
            'name' => 'Build / Develop/ Setup database', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_7_2_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_7_2->id, 
            'name' => 'Test database', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_7_2_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_7_2->id, 
            'name' => 'Review / signoff database', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 


        /****1 LEVEL under $wbs_1_7_3
        **/
        $wbs_1_7_3_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_7_3->id, 
            'name' => 'Build prototype', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_7_3_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_7_3->id, 
            'name' => 'Test prototype', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_7_3_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_7_3->id, 
            'name' => 'Review / signoff Prototype', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        /****1 LEVEL under $wbs_1_7_4
        **/
        $wbs_1_7_4_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_7_4->id, 
            'name' => 'Build common routines / modules /templates', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_7_4_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_7_4->id, 
            'name' => 'Develop unit test scripts', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_7_4_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_7_4->id, 
            'name' => 'Test common routines / modules / templates', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_7_4_4 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 4, 
            'parent_id' => $wbs_1_7_4->id, 
            'name' => 'Review and signoff', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 


        /****1 LEVEL under $wbs_1_7_5
        **/
        $wbs_1_7_5_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_7_5->id, 
            'name' => 'Build modules / programs / units', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_7_5_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_7_5->id, 
            'name' => 'Develop unit test scripts', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_7_5_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_7_5->id, 
            'name' => 'Test modules / programs / units', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_7_5_4 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 4, 
            'parent_id' => $wbs_1_7_5->id, 
            'name' => 'Review and signoff', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        /****1 LEVEL under $wbs_1_7_6
        **/
        $wbs_1_7_6_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_7_6->id, 
            'name' => 'Integrate modules / programs / units', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_7_6_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_7_6->id, 
            'name' => 'Develop unit testing scripts', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_7_6_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_7_6->id, 
            'name' => 'Unit Testing', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_7_6_4 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 4, 
            'parent_id' => $wbs_1_7_6->id, 
            'name' => 'Review and signoff', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 


        /****1 LEVEL under $wbs_1_8_1
        **/
        $wbs_1_8_1_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_8_1->id, 
            'name' => 'Data migration design', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_8_1_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_8_1->id, 
            'name' => 'Build data migration components', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_8_1_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_8_1->id, 
            'name' => 'Perform Data migration', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        /****1 LEVEL under $wbs_1_8_2
        **/
        $wbs_1_8_2_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_8_2->id, 
            'name' => 'Build testing routines', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_8_2_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_8_2->id, 
            'name' => 'Test Migration Results', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 


        /****1 LEVEL under $wbs_1_9_1
        **/
        $wbs_1_9_1_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_9_1->id, 
            'name' => 'Compile source code documentation', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_9_1_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_9_1->id, 
            'name' => 'Review and signoff', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        /****1 LEVEL under $wbs_1_9_2
        **/
        $wbs_1_9_2_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_9_2->id, 
            'name' => 'Develop Operations manual', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_9_2_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_9_2->id, 
            'name' => 'Review and signoff', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        /****1 LEVEL under $wbs_1_9_3
        **/
        $wbs_1_9_3_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_9_3->id, 
            'name' => 'Develop User Manual', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_9_3_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_9_3->id, 
            'name' => 'Review and signoff', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        /****1 LEVEL under $wbs_1_10_1
        **/
        $wbs_1_10_1_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_10_1->id, 
            'name' => 'Build Test plan and startegy', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_10_1_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_10_1->id, 
            'name' => 'Build test cases and scripts', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_10_1_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_10_1->id, 
            'name' => 'Review and signoff', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 


        /****1 LEVEL under $wbs_1_10_2
        **/
        $wbs_1_10_2_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_10_2->id, 
            'name' => 'Perform system testing', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_10_2_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_10_2->id, 
            'name' => 'Verification and validation', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        /****1 LEVEL under $wbs_1_10_3
        **/
        $wbs_1_10_3_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_10_3->id, 
            'name' => 'Perform testing', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_10_3_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_10_3->id, 
            'name' => 'Verification and validation', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        /****1 LEVEL under $wbs_1_10_4
        **/
        $wbs_1_10_4_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_10_4->id, 
            'name' => 'Perform testing', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_10_4_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_10_4->id, 
            'name' => 'Verification and validation', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 


        /****1 LEVEL under $wbs_1_10_5
        **/
        $wbs_1_10_5_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_10_5->id, 
            'name' => 'Perform final user acceptance', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_10_5_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_10_5->id, 
            'name' => 'Perform final operational acceptance', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_10_5_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_10_5->id, 
            'name' => 'Review & Signoff', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        /**
            ****1 LEVEL under $wbs_1_12
        **/
        $wbs_1_12_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_12->id, 
            'name' => 'Develop training program', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_12_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_12->id, 
            'name' => 'Conduct training', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 


        /**
            ****1 LEVEL under $wbs_1_13
        **/
        $wbs_1_13_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_13->id, 
            'name' => 'Implementation Readiness', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_13_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_13->id, 
            'name' => 'Review implementation readiness', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_13_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_13->id, 
            'name' => 'Signoff', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_13_4 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 4, 
            'parent_id' => $wbs_1_13->id, 
            'name' => 'Install system', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_13_5 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 5, 
            'parent_id' => $wbs_1_13->id, 
            'name' => 'Install HW', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_13_6 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 6, 
            'parent_id' => $wbs_1_13->id, 
            'name' => 'Install System SW', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_13_7 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 7, 
            'parent_id' => $wbs_1_13->id, 
            'name' => 'Install applcation', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_13_8 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 8, 
            'parent_id' => $wbs_1_13->id, 
            'name' => 'Load data', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_13_9 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 9, 
            'parent_id' => $wbs_1_13->id, 
            'name' => 'Application Testing', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_13_10 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 10, 
            'parent_id' => $wbs_1_13->id, 
            'name' => 'Parallel Testing', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_13_11 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 11, 
            'parent_id' => $wbs_1_13->id, 
            'name' => 'System Launched', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 


        /**
            ****1 LEVEL under $wbs_1_14
        **/
        $wbs_1_14_1 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 1, 
            'parent_id' => $wbs_1_14->id, 
            'name' => 'Document project closedow n report', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_14_2 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 2, 
            'parent_id' => $wbs_1_14->id, 
            'name' => 'Release resources', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

        $wbs_1_14_3 = Wbs::create([
            'project_id' => $project->id, 
            'number' => 3, 
            'parent_id' => $wbs_1_14->id, 
            'name' => 'Perform project post-martem', 
            'type' => WbsType::ACTIVITY_LIST, 
        ]); 

    }
}

















