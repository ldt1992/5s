<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model {

	// Table 
	protected $table='department';

	// Show data
	protected $getFields = ['id','Dept_Name'];

	// Don't display timestamps
	public $timestamps = false;

}
