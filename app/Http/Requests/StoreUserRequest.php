<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;


class StoreUserRequest extends FormRequest
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
            'name' => 'required|string|min:3',
            'email' => 'required|email',
            'age' => 'required|integer|min:18',
            'date' => 'required|date',
            'password' => 'required|min:6|confirmed',
            'url' => 'nullable|url',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'product_name' => 'required|string|min:3',
            'price' => 'required|numeric|min:0.01',
        ];
    }
}
