<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdoptionRequest extends FormRequest
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
            'adopter_id' => ['required'],
            'animal_id' => ['required'],
            'reason' => ['required','string','min:5','max:500'],
            'status' => ['required'],
        ];
    }

    public function messages(): array
    {
    return [
        'adopter_id.required' => 'O campo adotante é obrigatório.',
        'animal_id.required' => 'O campo animal é obrigatório.',
        'reason.required' => 'O campo razão é obrigatório.',
        ];
    }

}
