<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Detail;
use Excel;
use Input;
use DB;
class MaatwebsiteDemoController extends Controller {

	public function importExport()
	{
		return view('admin.importExport');
	}
	// Download - Export ra file
	public function downloadExcel($type)
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

	// Upload - Import từ file 
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
					'title' => $row->title, 
					'description' => $row->description
					];
				}
				// Nếu mảng $insert[] đã có dữ liệu, thì insert vào table items
				if(!empty($insert)){
					DB::table('test_Excel')->insert($insert);
					dd('Insert Record successfully.');
				}
			}
		}
		return back();
	}
}