<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'      => 'sometimes|required|string',
            'email'     => 'sometimes|required|unique:users,id,'.$this->id,
            'password'  => 'sometimes|required|min:8',
            'estado'    => 'sometimes|required|boolean',
        ];
    }
}
