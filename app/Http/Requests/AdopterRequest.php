<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdopterRequest extends FormRequest
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
            'phone_number' => ['required', 'string', 'celular_com_ddd'],
            'address' => ['required', 'string', 'min:5', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return ['phone_number.required' => 'O campo telefone é obrigatório.'];
    }
}
