<?php

namespace App\Http\Controllers\Traits; 

trait HasResourceRequestKey {
	protected function getRequestKeyResource() {
		return 'resource'; 
	}
}