<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => 'required|min:3|max:255',
            'description' => 'required|min:5',
            'thumb' => 'required',
            'price' => 'required|starts_with:£',
            'series' => 'required|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|max:50',
            'artists' => 'required|max:255',
            'writers' => 'required|max:255',
        ];
    }

    public function messages(){
        return [
            'title.required' => 'Il titolo è necessario',
            'title.min' => 'Il titolo deve contenere almeno :min caratteri',
            'title.max' => 'Il titolo può contenere massimo :max caratteri',
        ];
    }
}
