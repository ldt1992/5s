<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\SectionRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Section;
class SectionController extends Controller {

	// Get List
	public function getList(){
		// Lấy all dept
		$sections = Section::all();
		// tạo biến section (giá trị là $dept) truyền qua view
		return view('admin.section.list',compact('sections'));
	}

	// Get Add
	public function getAdd(){
		return view('admin.section.add');
	}

	// Post Add
	public function postAdd(SectionRequest $request){
		// Khởi tạo 1 đối tượng section
		$sect=new Section;
		$sect->Sect_Name = $request->txtName;
		// $sect->save();

		return redirect('admin/section/list')->with('message',$sect->Sect_Name.' is added successfully');
	}

	// Get Edit
	public function getEdit($id){
		// Lấy ra data bằng id truyền vào
		$section = Section::find($id);
		// hiển thị form Edit, tạo biến section truyền qua view
		return view('admin.section.edit',compact('section'));
	}

	// Post List
	public function postEdit(SectionRequest $request, $id){
		// Lấy data bằng id truyền vào
		$section = Section::find($id);
		$section->Sect_Name = $request->txtName;
		$section->save();

		// Thông báo thành công ra list section
		return redirect('admin/section/list')->with('message',$section->Sect_Name.' is updated successfully');
	}

	// Get Delete
	public function getDelete($id){
		// Lấy ra phần tử cần xoá bằng id
		$section=Section::find($id);
		// delete()
		$sect->delete();

		// Thông báo ra list section
		return redirect('admin/section/list')->with('message',$section->Sect_Name.' is removed successfully');
	}

}
