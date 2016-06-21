<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use Gate;

class CheckArticlesRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
      return true;
      //  return Gate::allows('create-article'); //via form request
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'hihi' => 'required|min:6',
        ];
    }
}
