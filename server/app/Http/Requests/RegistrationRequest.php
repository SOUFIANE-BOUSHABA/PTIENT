<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'username' => 'required|string|unique:users',
            'password' => 'required|string|min:6',
            'privilege' => 'required|string',
        ];
    }
}
