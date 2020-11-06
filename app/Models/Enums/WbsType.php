<?php 

namespace App\Models\Enums; 

abstract class WbsType {
	const WBS = 'WBS';
	const ACTIVITY_LIST = 'ACTIVITY_LIST'; 
	const DEFAULT = 'WBS';
	const ALL = array('WBS', 'ACTIVITY_LIST'); 
}