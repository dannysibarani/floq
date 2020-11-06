<?php

namespace App\Http\Controllers\Traits; 

trait HasProjectRequestKey {
	protected function getRequestKey() {
		return 'project'; 
	}
}