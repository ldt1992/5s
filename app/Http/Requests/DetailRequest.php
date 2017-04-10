<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class DetailRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'txtName'=>'required|unique:details,Detail_Content',
		];
	}

	public function messages()
	{
		return [
			'txtName.required'=>'Please input Detail',
			'txtName.unique'=>'This data is exist, dont allow duplicate data'
		];
	}

}
