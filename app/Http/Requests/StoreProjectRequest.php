<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' =>'required|max:255',
            'description' =>'required|max:2000',
            'thumb' =>'required|file|max:2048|mimes:jpg,bmp,png',
            'technologies' =>'required|max:255',
            'link' =>'required|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Il campo :attribute deve essere compilato.',
            'max' => 'Il campo :attribute può contenere un massimo di :max caratteri.',
            'thumb.max' => 'Il file :attribute può avere una dimensione massima di :max KB.',
            'thumb.mimes' => "Il file :attribute deve essere un'immagine",
        ];
    }

    public function attributes(): array
    {
        return [
            'title' =>'"Title"',
            'description' =>'"Description"',
            'thumb' =>'"Thumbnail"',
            'technologies' =>'"Technologies"',
            'link' =>'"GitHub Link"'
        ];
    }
}
