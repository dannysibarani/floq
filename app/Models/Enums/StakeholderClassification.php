<?php 

namespace App\Models\Enums; 

abstract class StakeholderClassification {
	/**
		Some projects may categorize stakeholders as friend, foe, or neutral; others may classify them as high, medium, or low impact
	*/

	const LOW = 'LOW';
	const MEDIUM = 'MEDIUM'; 
	const HIGH = 'HIGH';

	const FRIEND = 'FRIEND';
	const FOE = 'FOE'; 
	const NEUTRAL = 'NEUTRAL';

	const DEFAULT = 'HIGH';

	const ALL = array('LOW', 'MEDIUM', 'HIGH', 'FRIEND', 'FOE', 'NEUTRAL'); 
}