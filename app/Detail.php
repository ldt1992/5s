<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model {

	// Table 
	protected $table='details';

	// Show data
	protected $getFields = ['id','Detail_Content'];

	// Don't display timestamps
	public $timestamps = false;

}
