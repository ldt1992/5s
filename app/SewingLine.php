<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SewingLine extends Model {

	// Table 
	protected $table='sewing_lines';

	// Show data
	protected $getFields = ['id','Line_Number','Fact_ID'];

	// Don't display timestamps
	public $timestamps = false;
}