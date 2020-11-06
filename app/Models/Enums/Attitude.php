<?php 

namespace App\Models\Enums; 

abstract class Attitude {
	const ANAWARE = 'ANAWARE'; 
	const RESISTANT = 'RESISTANT';
	const NEUTRAL = 'NEUTRAL'; 
	const SUPPORTIVE = 'SUPPORTIVE';
	const LEADING = 'LEADING';
	const DEFAULT = 'ANAWARE';
	const ALL = array('ANAWARE', 'RESISTANT', 'NEUTRAL', 'SUPPORTIVE', 'LEADING'); 
}
