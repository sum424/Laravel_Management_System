<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DyeValidator extends FormRequest
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
            'Name' => 'required|max:255',
            'Brand' => 'required|max:255',
            'Price' => 'required|numeric',
            'Quantity' => 'required|numeric|max:100',
            'created_at' => 'required|date'
        ];
    }
}
