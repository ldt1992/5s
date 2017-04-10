<?php namespace App;

use Illuminate\Database\Eloquent\Model;

// Dùng để làm nội dung chấm điểm
class Subsect_Dept_Detail extends Model {

	// Table 
	protected $table='subsect_dept_detail';

	// Show data
	protected $getFields = ['Subsect_ID','Dept_ID','Detail_ID'];

	// Don't display timestamps
	public $timestamps = false;

	public function subsection()
	{
		return $this->hasOne('App\Subsection','Subsect_ID','id');
	}
}
