<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CaptinRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      return [
          'name' => 'required|string|max:191|min:2|unique:captins',
          'phone' => 'required|unique:captins',
          'car_brand' => 'required',
          'year' => 'required|integer',
      ];
    }
}
