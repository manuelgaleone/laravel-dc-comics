<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:comics,title|min:10|max:100',
            'description' => 'required|max:255',
            'thumb' => 'required',
            'price' => 'required|max:20',
            'series' => 'required|max:25',
            'sale_date' => 'required|max:15',
            'type' => 'required|max:20'
        ];
    }
}
