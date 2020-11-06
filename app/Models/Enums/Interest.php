<?php 

namespace App\Models\Enums; 

abstract class Interest {
	const LOW = 'LOW';
	const MEDIUM = 'MEDIUM'; 
	const HIGH = 'HIGH';
	const DEFAULT = 'HIGH';
	const ALL = array('LOW', 'MEDIUM', 'HIGH'); 
}