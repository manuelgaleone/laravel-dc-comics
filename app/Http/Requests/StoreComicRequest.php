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

    public function messages()
    {
        return [
            'title.required' => 'Inserisci il titolo!',
            'title.unique' => "Il titolo dev'essere unico!",
            'title.min' => "Il titolo deve avere minimo :min caratteri!",
            'title.max' => "Il titolo deve avere massimo :max caratteri!",
            'description.required' => 'Inserisci la Descrizione!',
            'description.max' => "La descrizione deve avere massimo :max caratteri!",
            'price.required' => 'Inserisci il Prezzo!',
            'price.max' => "Il prezzo deve avere massimo :max caratteri!",
            'series.required' => 'Inserisci la Serie!',
            'series.max' => "La serie deve avere massimo :max caratteri!",
            'sale_date.required' => "Inserisci la Data d'Acquisto!",
            'sale_date.max' => "La Data d'acquisto deve avere massimo :max caratteri!",
            'type.required' => 'Inserisci il tipo!',
            'type.max' => "Il tipo deve avere massimo :max caratteri!"
        ];
    }
}
