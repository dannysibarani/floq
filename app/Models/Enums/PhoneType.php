<?php 

namespace App\Models\Enums; 

abstract class PhoneType {
	const CELL = 'CELL'; 
	const HOME = 'HOME';
	const WORK = 'WORK';
	const UNSPECIFIED = 'UNSPECIFIED';
	const DEFAULT = 'UNSPECIFIED';
	const ALL = array('CELL', 'HOME', 'WORK', 'UNSPECIFIED'); 
}