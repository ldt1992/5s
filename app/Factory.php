<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Factory extends Model {

	// Table 
	protected $table='factory';

	// Show data
	protected $getFields = ['id','Fact_Name'];

	// Don't display timestamps
	public $timestamps = false;
}
