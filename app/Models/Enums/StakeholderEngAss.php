<?php 

namespace App\Models\Enums; 


abstract class StakeholderEngAss {
	const CURRENT = 'C';
	const DESIRED = 'D'; 
	const CURRENT_DESIRED = 'C D';
	const DEFAULT = NULL;
	const ALL = array('C', 'D', 'C D'); 
} 