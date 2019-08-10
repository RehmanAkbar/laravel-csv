<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class StoreTransactions extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'start_date'    => 'required|date_format:d-m-Y',
            'end_date'      => 'required|date_format:d-m-Y',
            "first_name"    => 'required',
            "last_name"     => "required",
            "email"         => "required"
        ];
    }
}
