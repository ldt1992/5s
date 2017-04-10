<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class testExcel extends Model {

	protected $table='test_Excel';

	// Show data
	protected $getFields = ['title','description','Sect_ID'];

	// Don't display timestamps
	public $timestamps = false;
}
