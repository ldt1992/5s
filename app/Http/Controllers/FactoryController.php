<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\FactoryRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Factory;
class FactoryController extends Controller {

	// Get List
	public function getList()
	{
		$factories=Factory::all();
		// Gọi View List của Factory, truyền biến factories qua View
		return view('admin.factory.list',compact('factories'));
	}

	// Get Add
	public function getAdd()
	{
		return view('admin.factory.add');
	}

	// Post Add
	public function postAdd(FactoryRequest $request)
	{
		// $fact->Fact_Name 		Fact_Name là cột trong Db
		$factory=new Factory;
		$factory->Fact_Name = $request->txtName;
		$factory->save();

		// Trả về thông báo thành công
		return redirect('admin/factory/list')->with('message',$factory->Fact_Name.' is added successfully');
	}

	// Get Edit
	public function getEdit($id)
	{
		// $fact = Factory::find(1);
		$factory = Factory::find($id);
		// Gọi view Edit của Factory, truyền biến factories qua View
		return view('admin.factory.edit',compact('factory'));
	}

	// Post Edit
	public function postEdit(FactoryRequest $request, $id)
	{
		$factory =Factory::find($id);
		$factory->Fact_Name = $request->txtName;
		$factory->save();

		return redirect('admin/factory/list')->with('message',$factory->Fact_Name.' is updated successfully');
	}

	// Get Delete
	public function getDelete($id)
	{
		$factory=Factory::find($id);
		$factory->delete();

		return redirect('admin/factory/list')->with('message',$factory->Fact_Name.' is remove successfully');
	}
}