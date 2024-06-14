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
            'ar_drName' => 'required|string|max:255',
            'en_drName' => 'required|string|max:255',
            'ar_job_specialization' => 'required|string|max:255',
            'en_job_specialization' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'email' => 'required|email',
            'ar_title' => 'required|string|max:255',
            'en_title' => 'required|string|max:255',
            'ar_description' => 'nullable|string',
            'en_description' => 'nullable|string',
            'dr_photo' => 'image|mimes:jpeg,png,jpg,gif', 
            'ar_footer_description' => 'nullable|string',
            'en_footer_description' => 'nullable|string',

        ];
    }
}
