<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Fact_Sect extends Model {

	// Table 
	protected $table='fact_sect';

	// Show data
	protected $getFields = ['Fact_ID','Sect_ID'];

	// Don't display timestamps
	public $timestamps = false;
}
