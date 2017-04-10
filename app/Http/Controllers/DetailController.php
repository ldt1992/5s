<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Detail;
use App\Http\Requests\DetailRequest;
use Illuminate\Database\Eloquent\Collection;
class DetailController extends Controller {

	// Get List
	public function getList()
	{
		// Phân trang
		$details=Detail::Paginate(20);
		// $details->url('admin/detail/list');
		// Gọi view List của Detail, truyền $detail qua View với tên là Detail
		return view('admin.detail.list', ['details'=>$details]);
	}

	// Get Add
	public function getAdd()
	{
		return view('admin.detail.add');
	}

	// Post Add
	public function postAdd(DetailRequest $request)
	{
		// $detail->Detail_Content 		Detail_Content là cột trong Db
		$detail=new Detail;
		$detail->Detail_Content = $request->txtName;
		// $detail->save();

		// Trả về thông báo thành công
		return redirect('admin/detail/list')->with('message',$detail->Detail_Content.' is added successfully');
	}

	// Get Edit
	public function getEdit($id)
	{
		// $detail = Detail::find(1);
		$detail = Detail::find($id);
		// Gọi view Edit của Detail, tạo biến Detail truyền qua view
		return view('admin.detail.edit',compact('detail'));
	}

	// Post Edit
	public function postEdit(DetailRequest $request, $id)
	{
		$detail =Detail::find($id);
		$detail->Detail_Content = $request->txtName;
		// $detail->save();

		return redirect('admin/detail/list')->with('message',$detail->Detail_Content.' is updated successfully');
	}

	// Get Delete
	public function getDelete($id)
	{
		$detail=Detail::find($id);
		// $detail->delete();

		return redirect('admin/detail/list')->with('message',$detail->Detail_Content.' is remove successfully');
	}

}
