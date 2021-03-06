<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SectionRequest extends Request {

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
			'txtName'=>'required|unique:section,Sect_Name',
		];
	}

	// Translate to other language
	public function messages()
	{
		return [
			'txtName.required'=>'Please input Section name',
			'txtName.unique'=>'This name is exist, dont allow duplicate data'
		];
	}
}
