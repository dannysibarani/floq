<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QualityMetric extends Model
{
	public static $resource_name = 'QUALITY_METRIC'; 

	protected $fillable = [
		'project_id', 'sid', 'items', 'metric', 'measurement_method'
	]; 
}
