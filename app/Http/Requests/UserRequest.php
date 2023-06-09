<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
            ],
            'email' => [
                'required',
                'unique',
                'string',
                'email',
                'max:255',
            ],
            'password' => [
                $this->isMethod('patch') ? 'sometimes' : 'required',
                'string',
                'min:8',
                'confirmed',
            ],
            'file' => 'nullable|image|max:10240',
        ];
    }
}
