<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Fact_Sect;
use App\Section;
USE App\Factory;
class Fact_SectController extends Controller {

	// Get List
	public function getList()
	{
		// $subsection=Subsection::join('sections','subsections.Sect_ID','=','sections.id')->select('subsections.id','subsections.Subsect_Name','sections.Sect_Name')->get();
		$factory_section=Fact_Sect::join('factory','factory.id','=','fact_sect.Fact_ID')->join('section','section.id','=','fact_sect.Sect_ID')->get();
		// Gọi view List của Factory, truyền $fact qua View với tên là factory
		return view('admin.fact_sect.list',compact('factory_section'));
	}

	// Get Add
	public function getAdd()
	{
		// Lấy list Section & Factory
		$sections=Section::all();
		$factories=Factory::all();
		return view('admin.fact_sect.add', compact('sections','factories'));
	}

	// Post Add
	public function postAdd(Request $request)
	{
		// Khởi tạo đối tượng Fact_Sect
		$fact_sect = new Fact_Sect;
		$fact_sect->Fact_ID = $request->selFactory;
		$fact_sect->Sect_ID = $request->selSection;

		// Nếu phát hiện trùng lặp dữ liệu, sẽ thông báo lỗi ra màn hình hiện tại
		$check_exist=\DB::table('Fact_Sect')->where('Fact_ID','=',$fact_sect->Fact_ID,' and ','Sect_ID','=',$fact_sect->Sect_ID)->get();
		if (!$check_exist) {
			$fact_sect->save();
			// Trả về thông báo thành công
			return redirect('admin/fact_sect/list')->with('message','New data are added successfully.');
		}
		else{
			// Trả về thông báo trùng dữ liệu
			return redirect('admin/fact_sect/add')->with('message','This name is exist. Dont allow duplicate data');
		}
	}

	// Get Edit => hiển thị vẫn chưa đúng
	public function getEdit($fact_id, $sect_id)
	{
		// Get ID to edit
		$fact_sect = \DB::table('Fact_Sect')->where('Fact_ID','=',$fact_id,' and ','Sect_ID','=',$sect_id)->first();
		// Lấy danh sách Factory và Section để select
		$factories=Factory::all();
		$sections=Section::all();
		// Gọi view Edit của fact_sect, truyền biến fact_sect qua view
		return view('admin.fact_sect.edit',compact('fact_sect','factories','sections'));
	}

	// Post Edit => Errors
	public function postEdit(Request $request, $fact_id, $sect_id)
	{
		// Lấy phần tử để sửa
		$fact_sect =\DB::table('Fact_Sect')->where('Fact_ID','=',$fact_id,' and ','Sect_ID','=',$sect_id)->first();
		// Gán giá trị mới
		$fact_sect->Fact_ID = $request->selFactory;	
		$fact_sect->Sect_ID = $request->selSection;
		// Lưu DB
		$fact_sect->save();
		// Chuyển về View và xuất thông báo
		return redirect('admin/fact_sect/list')->with('message','This data is updated successfully');
	}

	// Get Delete
	public function getDelete($fact_id, $sect_id)
	{
		// Get ID to delete
		$fact_sect = \DB::table('Fact_Sect')->where('Fact_ID','=',$fact_id,' and ','Sect_ID','=',$sect_id)->first();
		// $fact_sect->delete();

		return redirect('admin/fact_sect/list')->with('message','This data is remove successfully.');
	}
}