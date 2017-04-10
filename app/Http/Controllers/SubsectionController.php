<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Subsection;
use App\Section;
use App\Http\Requests\SubsectionRequest;
class SubsectionController extends Controller {

	// Get List
	public function getList(){
		// CÁCH 1 - Query Builder - Lấy subsection có join section
		$subsections=Subsection::join('section','subsections.Sect_ID','=','section.id')->select('subsections.id','subsections.Subsect_Name','section.Sect_Name')->get();
		// CÁCH 2 - Eloquent ORM
		// 1. Lấy ra từng ID của Subsection
		// 2. Dùng find() để lấy Section name
		// $data=App\Subsection::find(1)->sections()->get()->toArray();
		
		// lấy biến $subsection truyền qua view
		return view('admin.subsection.list',compact('subsections'));
	}

	// Get Add
	public function getAdd(){
		// Lấy danh sách Section
		$sections=Section::all();
		return view('admin.subsection.add',compact('sections'));
	}

	// Post Add
	public function postAdd(SubsectionRequest $request){
		// Khởi tạo 1 đối tượng subsection
		$subsection =new Subsection;
		$subsection->Subsect_Name = $request->txtName;
		$subsection->Sect_ID = $request->selSection;
		$subsection->save();

		return redirect('admin/subsection/add')->with('message',$subsection->Subsect_Name.' và '.$subsection->Sect_ID.' is added successfully');
	}

	// Get Edit
	public function getEdit($id){
		// Lấy ra data bằng id truyền vào
		$subsection=Subsection::find($id);
		$sections=Section::all();
		// hiển thị form Edit, tạo biến subsection truyền qua view
		return view('admin.subsection.edit',compact('subsection','sections'));
	}

	// Post List
	public function postEdit(SubsectionRequest $request, $id){
		// Lấy data bằng id truyền vào
		$subsection=Subsection::find($id);
		$subsection->Subsect_Name = $request->txtName;
		$subsection->Sect_ID = $request->selSection;
		$subsection->save();

		// Thông báo thành công ra list subsection
		return redirect('admin/subsection/list')->with('message',$subsection->Subsect_Name.' và '.$subsection->Sect_ID.' is updated successfully');
	}

	// Get Delete
	public function getDelete($id){
		// Lấy ra phần tử cần xoá bằng id
		$subsection=Subsection::find($id);
		// delete()
		$subsection->delete();

		// Thông báo ra list subsection
		return redirect('admin/subsection/list')->with('message',$subsection->Subsect_Name.' is removed successfully');
	}
}