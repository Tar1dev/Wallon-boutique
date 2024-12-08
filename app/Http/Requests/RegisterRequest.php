<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email' => 'required|email|max:30',
            'name' => 'required|string|max:25',
            'first_name' => 'required|string|max:25',
            'class_level' => 'required|string|max:25',
            'class_number' => 'required|int',
            'password' => 'required|string|min:6',
        ];
    }
}
