<?php

namespace Vinyl\Http\Requests;

use Vinyl\Http\Requests\Request;

class SaveBandRequest extends Request
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
            //'name' => ['required|min:3', ''],
            'name' => 'required|unique:bands|min:2',
        ];
    }
}
