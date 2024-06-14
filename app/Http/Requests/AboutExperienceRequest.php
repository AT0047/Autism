<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutExperienceRequest extends FormRequest
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
            'ar_title' => 'required|string|max:255',
            'en_title' => 'required|string|max:255',
            'ar_place' => 'required|string',
            'en_place' => 'required|string',
            'ar_description' => 'required|string',
            'en_description' => 'required|string',
            'date' => 'required|string',
        ];
    }
}
