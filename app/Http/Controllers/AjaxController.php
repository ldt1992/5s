<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Section;
use App\Subsection;
use App\Detail;
class AjaxController extends Controller {

	public function getList()
	{
		$section=Section::all();
		$subsection=Subsection::all();

		$details = Detail::all();
		return view('admin.test.ajax',['section'=>$section,'subsection'=>$subsection,'details'=>$details]);
	}

	public function getSubsection($idSection)
	{
		$subsection=Subsection::where('Sect_ID',$idSection)->get();
		foreach ($subsection as $subsect) {
			echo '<option value="'. $subsect-> id .'">'. $subsect-> Subsect_Name .'</option>';
		}
	}
}
