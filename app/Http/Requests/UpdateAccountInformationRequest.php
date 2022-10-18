<?php

namespace App\Http\Requests;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAccountInformationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => [
                'required',
                'string',
                'email',
            ],
            'password' => ['nullable', 'string', 'min:8'],
        ];
    }

    public function authorize(): bool
    {
        return Auth::hasUser();
    }
}
