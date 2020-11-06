<?php 

namespace App\Models\Enums; 

abstract class Sex {
	const MALE = 'MALE';
	const FEMALE = 'FEMALE';
	const UNSPECIFIED = 'UNSPECIFIED';
	const DEFAULT = 'UNSPECIFIED';
	const ALL = array('MALE', 'FEMALE', 'UNSPECIFIED'); 
}