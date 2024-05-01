<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutUsRequest extends FormRequest
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
            'dr_name' => 'required|string|max:255',
            'job_specialization' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'email' => 'required|email',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'dr_photo' => 'image', 

        ];
    }
}
