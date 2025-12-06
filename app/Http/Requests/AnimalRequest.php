<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnimalRequest extends FormRequest
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
            'name' => ['required','string','min:3','max:255'],
            'age' => ['required','integer','min:0','max:120' ],
            'size' => ['required'],
            'gender' => ['required'],
            'species_id' => ['required'],
        ];
    }

    public function messages(): array
    {
        return ['species_id.required' => 'O campo espécies é obrigatório.'];
    }
}
