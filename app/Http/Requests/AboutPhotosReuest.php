<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutPhotosReuest extends FormRequest
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
            'sec1_video' => 'required|string|max:255',
            'sec1_photo' => 'required|image|mimes:jpeg,png,jpg,gif',
            'sec2_photo' => 'required|image|mimes:jpeg,png,jpg,gif',
            'sec4_photo' => 'required|image|mimes:jpeg,png,jpg,gif',
            'logo' => 'image|mimes:jpeg,png,jpg,gif',
    
        ];
    }
}
