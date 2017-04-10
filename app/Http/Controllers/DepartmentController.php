<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\DepartmentRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller {

	// Get List
	public function getList(){
		// Lấy all dept
		$departments=Department::all();
		// tạo biến department (giá trị là $dept) truyền qua view
		return view('admin.department.list',compact('departments'));
	}

	// Get Add
	public function getAdd(){
		return view('admin.department.add');
	}

	// Post Add
	public function postAdd(DepartmentRequest $request){
		// Khởi tạo 1 đối tượng Department
		$department=new Department;
		$department->Dept_Name = $request->txtName;
		$department->save();

		return redirect('admin/department/list')->with('message',$department->Dept_Name.' is added successfully');
	}

	// Get Edit
	public function getEdit($id){
		// Lấy ra data bằng id truyền vào
		$department=Department::find($id);
		// hiển thị form Edit, tạo biến department truyền qua view
		return view('admin.department.edit',compact('department'));
	}

	// Post List
	public function postEdit(DepartmentRequest $request, $id){
		// Lấy data bằng id truyền vào
		$department=Department::find($id);
		$department->Dept_Name = $request->txtName;
		$department->save();

		// Thông báo thành công ra list department
		return redirect('admin/department/list')->with('message',$department->Dept_Name.' is updated successfully');
	}

	// Get Delete
	public function getDelete($id){
		// Lấy ID để xóa
		$department=Department::find($id);
		// delete()
		$department->delete();

		// Thông báo ra View List Department
		return redirect('admin/department/list')->with('message',$department->Dept_Name.' is removed successfully');
	}

}
