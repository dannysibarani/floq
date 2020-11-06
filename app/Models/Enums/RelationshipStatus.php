<?php 

namespace App\Models\Enums; 

abstract class RelationshipStatus {
	const SINGLE = 'SINGLE';
	const MARRIED = 'MARRIED';
	const UNSPECIFIED = 'UNSPECIFIED';
	const DEFAULT = 'UNSPECIFIED';
	const ALL = array('SINGLE', 'MARRIED', 'UNSPECIFIED'); 
}