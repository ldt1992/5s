<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Subsect_Dept_DetaiL;
use App\Subsection;
use App\Department;
use App\Detail;

// DÙNG ĐỂ LÀM NỘI DUNG CHẤM ĐIỂM
class Subsect_Dept_DetailController extends Controller {

	// Lấy View Danh Sách
	public function getList()
	{
		$subsect_dept_detail = Subsect_Dept_DetaiL::join('subsections','subsections.id','=','Subsect_ID')->join('department','department.id','=','Dept_ID')->join('details','details.id','=','Detail_ID')->get();
		return view('admin.subsect_dept_detail.list',compact('subsect_dept_detail'));
	}

	// Lấy View Thêm Dữ Liệu
	public function getAdd()
	{
		// Lấy List Subsection, Department, Details
		$subsections = Subsection::all();
		$departments = Department::all();
		$details = Detail::orderBy('Detail_Content','asc')->get();
		return view('admin.subsect_dept_detail.add',compact('subsections','departments','details'));
	}

	// Insert Dữ Liệu
	public function postAdd(Request $request)
	{
		// Tạo đối tượng rỗng trước
		$data = new Subsect_Dept_DetaiL;
		// Lấy ID Subsection, Department, Details
		$subsect_id 	= $request->selSubsection;
		$dept_id 		= $request->selDepartment;
		$detail_id 		= $request->selDetail;
		// Gán giá trị vào $data
		$data->Subsect_ID = $subsect_id;
		$data->Dept_ID = $dept_id;
		$data->Detail_ID = $detail_id;
		// Lưu DB
		$data->save();
		// Thông báo thành công
		return redirect('admin/subsect_dept_detail/add')->with('message','Data is inserted successfully.');
	}

	// Lấy View Chỉnh Sửa Dữ Liệu
	public function getEdit($id)
	{
		
	}

	// Update Dữ Liệu
	public function postEdit($id)
	{
		
	}

	// Xóa Dữ Liệu
	public function getDelete($id)
	{
		
	}

	// Import & Export 
	public function importExport()
	{
		return view('admin.subsect_dept_detail.importExport');
	}

	// Export to Excel
	public function exportExcel()
	{
		// Lấy dữ liệu trong bảng
		$data = Detail::get()->toArray();
		// Tạo file excel itsolutionstuff_example, tên sheet là mySheet, dùng dữ liệu là $data
		return Excel::create('itsolutionstuff_example', function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
			{
				$sheet->fromArray($data);
			});
	        // Sau cùng là tải xuống theo từng loại
		})->download($type);
	}

	// Import from Excel
	public function importExcel()
	{
		if(Input::hasFile('import_file')){
			// Lấy đường dẫn thực của file
			$path = Input::file('import_file')->getRealPath();
			// Bắt đầu load dữ liệu
			$data = Excel::load($path, function($reader) {
			})->get();
			// Nếu file Excel đã có dữ liệu thì tạo mảng insert[] và truyền dữ liệu cho mảng
			if(!empty($data) && $data->count()){
				foreach ($data as $key => $row) {
					$insert[] = [
					'Subsect_ID' => $row->Subsect_ID, 
					'Dept_ID' => $row->Dept_ID,
					'Detail_ID' =>$row->Detail_ID,
					];
				}
				// Nếu mảng $insert[] đã có dữ liệu, thì insert vào table items
				if(!empty($insert)){
					DB::table('subsect_dept_detail')->insert($insert);
					dd('Insert Record successfully.');
				}
			}
		}
		return back();
	}
}