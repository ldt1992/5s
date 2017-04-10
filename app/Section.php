<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model {

	// Table 
	protected $table='section';

	// Show data
	protected $getFields = ['id','Sect_Name'];

	// Don't display timestamps
	public $timestamps = false;

	// 1 Section có nhiều (N) Subsection
	public function subsections(){
		return $this->hasMany('App\Subsection','Sect_ID');
	}
}