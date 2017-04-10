<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Subsection extends Model {

	// Table 
	protected $table='subsections';

	// Show data
	protected $getFields = ['id','Subsect_Name','Sect_ID'];

	// Don't display timestamps
	public $timestamps = false;

	// 1 Subsection thuộc về 1 Section
	public function sections(){
		return $this->belongsTo('App\Section','id');
	}
}
