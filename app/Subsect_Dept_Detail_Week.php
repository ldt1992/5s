<?php namespace App;

use Illuminate\Database\Eloquent\Model;

// Dùng để chấm điểm
class Subsect_Dept_Detail_Week extends Model {

	// Table 
	protected $table='subsects_depts_details_weeks';

	// Show data
	protected $getFields = ['Subsect_ID','Dept_ID','Detail_ID','Week_ID'];

	// Don't display timestamps
	public $timestamps = false;
}
