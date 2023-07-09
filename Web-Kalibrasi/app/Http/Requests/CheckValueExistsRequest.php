<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CheckValueExistsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'no_order' => [
                'required',
                Rule::unique('info_uuts')->ignore($this->input('no_order'), 'no_order'),
            ],
        ];
    }

    public function messages()
    {
        return [
            'no_order.unique' => 'Nilai tersebut sudah ada.',
        ];
    }
}
