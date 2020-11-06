<?php 

namespace App\Models\Enums; 

abstract class PhoneStatus {
	const ACTIVE = 'ACTIVE';
	const INACTIVE = 'INACTIVE'; 
	const DEFAULT = 'ACTIVE';
	const ALL = array('ACTIVE', 'INACTIVE'); 
}