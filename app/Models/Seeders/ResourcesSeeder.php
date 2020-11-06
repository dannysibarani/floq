<?php

namespace App\Models\Seeders; 

use App\Models\Resource; 


class ResourcesSeeder
{
    public static function create()
    {
		Resource::create([
			'name' => 'PROJECT', 
			'description' => 'Project/Program.', 
		]); 

		Resource::create([
			'name' => 'STAKEHOLDER', 
			'description' => 'Stakeholders', 
		]); 

		Resource::create([
			'name' => 'PROJECT_ROLE', 
			'description' => 'Project Roles', 
		]); 

		Resource::create([
			'name' => 'PROJECT_CHARTER', 
			'description' => 'The project charter is a document that formally authorizes a project or phase. The project charter defines the reason for the project and assigns a project manager and his or her authority level for the project. The contents of the charter describe the project in high-level terms.', 
		]); 

		Resource::create([
			'name' => 'STAKEHOLDER_REGISTER', 
			'description' => 'The stakeholder register is used to identify those people and organizations impacted by the project and to document relevant information about each stakeholder.', 
		]); 

		Resource::create([
			'name' => 'STAKEHOLDER_ANALYSIS', 
			'description' => 'Stakeholder analysis is used to classify stakeholders. It can be used to help fill in the stakeholder register. Analyzing stakeholders can also help in planning stakeholder engagement for groups of stakeholders.', 
		]); 

		Resource::create([
			'name' => 'REQUIREMENT', 
			'description' => '
				<p><strong>REQUIREMENT_DOCUMENTATION</strong>: Project success is directly influenced by the discovery and decomposition of stakeholder\'s needs into requirements and by the care taken in determining, documenting, and managing the requirements of the product, service, or result of the project. These requirements need to be documented in enough detail to be included in the scope baseline and be measured and validated. Requirements documentation assists the project manager in making tradeoff decisions among requirements and in managing stakeholder expectations. Requirements will be progressively elaborated as more information about the project becomes available.</p>
				<p><strong>REQUIREMENT_TRACEABLITY_MATRIX</strong>: A requirements traceability matrix is used to track the various attributes of requirements throughout the project life cycle. It uses information from the requirements documentation and traces how those requirements are addressed through other aspects of the project.</p>
			', 
		]); 

		/*Resource::create([
			'name' => 'REQUIREMENT_DOCUMENTATION', 
			'description' => 'Project success is directly influenced by the discovery and decomposition of stakeholder\'s needs into requirements and by the care taken in determining, documenting, and managing the requirements of the product, service, or result of the project. These requirements need to be documented in enough detail to be included in the scope baseline and be measured and validated. Requirements documentation assists the project manager in making tradeoff decisions among requirements and in managing stakeholder expectations. Requirements will be progressively elaborated as more information about the project becomes available.', 
		]); 

		Resource::create([
			'name' => 'REQUIREMENT_TRACEABLITY_MATRIX', 
			'description' => 'A requirements traceability matrix is used to track the various attributes of requirements throughout the project life cycle. It uses information from the requirements documentation and traces how those requirements are addressed through other aspects of the project.', 
		]); */

		Resource::create([
			'name' => 'PROJECT_SCOPE_STATEMENT', 
			'description' => 'The project scope statement assists in defining and developing the project and product scope.', 
		]); 

		Resource::create([
			'name' => 'WBS', 
			'description' => 'The work breakdown structure (WBS) is used to decompose all the work of the project. It begins at the project level and is successively broken down into finer levels of detail. The lowest level, a work package, represents a discrete deliverable that can be decomposed into activities to produce the deliverable. The WBS should have a method of identifying the hierarchy, such as a numeric structure. The WBS can be shown as a hierarchical chart or as an outline. The approved WBS, its corresponding WBS dictionary, and the project scope statement comprise the scope baseline for the project.', 
		]); 

		Resource::create([
			'name' => 'ACTIVITY_LIST', 
			'description' => 'The activity list defines all the activities necessary to complete the project work. It also describes the activities in sufficient detail so that the person performing the work understands the requirements necessary to complete it correctly.', 
		]); 

		Resource::create([
			'name' => 'DURATION_ESTIMATE', 
			'description' => 'Duration estimates provide information on the amount of time it will take to complete project work. They can be determined by developing an estimate for each activity, work package, or control account, using expert judgment or a quantitative method, such as: • Parametric estimating • Analogous estimating • Three-point estimating. For those activity durations driven by human resources, as opposed to material or equipment, the duration estimates will generally convert the estimate of effort hours into days or weeks. To convert effort hours into days, take the total number of hours and divide by 8. To convert to weeks, take the total number of hours and divide by 40.', 
		]); 

		Resource::create([
			'name' => 'SCHEDULE', 
			'description' => 'The project schedule combines the information from the activity list, network diagram, resource requirements, duration estimates, and any other relevant information to determine the start and finish dates for project activities. A common way of showing a schedule is via Gantt chart showing the dependencies between activities. The sample Gantt chart is for designing, building, and installing kitchen cabinets.', 
		]); 

		Resource::create([
			'name' => 'ACTIVITY_COST_ESTIMATE', 
			'description' => 'Cost estimates provide information on the cost of resources necessary to complete project work, including labor, equipment, supplies, services, facilities, and material. Estimates can be determined by developing an approximation for each work package using expert judgment or by using a quantitative method such as: • Parametric estimates • Analogous estimates • Three-point estimates', 
		]); 

		Resource::create([
			'name' => 'BUDGET', 
			'description' => 'Budget', 
		]); 

		Resource::create([
			'name' => 'RISK_REGISTER', 
			'description' => 'The risk register captures the details of identified individual risks. It documents the results of risk analysis, risk response planning, response implementation, and current status. It is used to track information about identified risks over the course of the project.', 
		]); 

		Resource::create([
			'name' => 'QUALITY_METRIC', 
			'description' => 'Quality metrics provide specific detailed measurements about a project or product attribute, and how it should be measured to verify compliance. Metrics are consulted in the manage quality process to ensure that the processes used will meet the metric. The deliverables or processes are measured in the control quality phase and compared to the metric to determine if the result is acceptable or if corrective action or rework is required.', 
		]); 

		Resource::create([
			'name' => 'PROJECT_ORGANIZATION', 
			'description' => 'Organizational chart', 
		]); 

		Resource::create([
			'name' => 'STAKEHOLDER_ENGAGEMENT_ASSESSMENT', 
			'description' => 'The stakeholder engagement plan is a component of the project management plan. It describes the strategies and actions that will be used to promote productive involvement of stakeholders in decision making and project execution.', 
		]); 

		Resource::create([
			'name' => 'COMMUNICATION_MANAGEMENT_PLAN', 
			'description' => 'The communications management plan is a component of the project management plan. It describes how project communications will be planned, structured, implemented, and monitored for effectiveness.', 
		]); 

		Resource::create([
			'name' => 'ISSUE_LOG', 
			'description' => 'The issue log is a project document used to record and monitor issues. An issue is defined as a current condition or situation that could have an impact on the project objectives. Examples of issues are points or matters in question that are in dispute or under discussion, or over which there are opposing views or disagreements. Issues can also arise from a risk event that has occurred and must now be dealt with.', 
		]); 

		Resource::create([
			'name' => 'CHANGE_REQUEST', 
			'description' => 'A change request is used to change any aspect of the project. It can pertain to product, documents, cost, schedule, or any other aspect of the project.', 
		]); 

		Resource::create([
			'name' => 'PROJECT_STATUS_REPORT', 
			'description' => 'The project status report (sometimes known as a performance report or progress report) is filled out by the project manager and submitted on a regular basis to the sponsor, project portfolio management group, project management office (PMO), or other project oversight person or group. The information is compiled from the team member status reports and includes overall project performance. It contains summary-level information, such as accomplishments, rather than detailed activity-level information. The project status report tracks schedule and cost status for the current reporting period and provides planned information for the next reporting period. It indicates impacts to milestones and cost reserves as well as identifying new risks and issues that have arisen in the current reporting period.', 
		]); 

		Resource::create([
			'name' => 'PROJECT_CLOSEOUT', 
			'description' => 'Project closeout involves documenting the final project performance as compared to the project objectives. The objectives from the project charter are reviewed and evidence of meeting them is documented. If an objective was not met, or if there is a variance, that is documented as well. In addition, information from the procurement closeout is documented.', 
		]); 



    }
}
