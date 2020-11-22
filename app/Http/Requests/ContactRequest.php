<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'string|required|min:2|max:30',
            'last_name' => 'string|required|min:2|max:30',
            'mobile' => 'required|regex:/(04)[0-9]{8}/',
            'email' => 'email:rfc,dns|nullable',
            'post_code' => 'digits:4|nullable',
        ];
    }
}
