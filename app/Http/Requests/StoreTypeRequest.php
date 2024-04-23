<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTypeRequest extends FormRequest
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
            'title' =>'required|max:255'
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Il campo :attribute deve essere compilato.',
            'max' => 'Il campo :attribute può contenere un massimo di :max caratteri.',
        ];
    }

    public function attributes(): array
    {
        return [
            'title' =>'"Title"',
        ];
    }


}
