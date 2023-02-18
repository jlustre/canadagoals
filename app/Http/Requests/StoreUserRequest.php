<?php

namespace App\Http\Requests;

use Rules\Password;
use Laravel\Jetstream\Jetstream;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'regex:/^[a-z0-9]+$/', 'min:5', 'max:25', 'unique:users'],
            'sponsor' => ['required', 'exists:users,name'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users'],
            'password' => ['required', 'max:25', 'min:7', 'confirmed'],
        ];
    }
}
