<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\SewingLine;
use App\Factory;
class SewingLineController extends Controller {

	public function getList()
	{
		$sewinglines=SewingLine::all();
		// Hiện xưởng
		// Code
		return view('admin.sewingline.list',compact('sewinglines'));
	}
}