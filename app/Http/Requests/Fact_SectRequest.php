<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class Fact_SectRequest extends Request {

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
			// 'txtName'=>'required|unique:fact_sect,Fact_Name'
		];
	}

	public function messages()
	{
		return[
			/*'txtName.required'=>'Please input Factory Name',
			'txtName.unique'=>'This data is exist, dont allow duplicate data',*/
		];
	}

}
