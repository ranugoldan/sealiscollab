<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StorePrediksiRequest extends Request
{
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
    'cuaca' => 'required',
    'arahangin' => 'required',
    'kecmin' => 'required|between:0,99.99',
    'kecmax' => 'required|between:0,99.99',
    'tinggimin' => 'required|between:0,19.99',
    'tinggimax' => 'required|between:0,19.99'
  ];
    }
}
