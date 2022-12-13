<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupportRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:supports',
            'phone' => 'required|string|max:255|unique:supports',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
                'phone.unique' => 'Este telefono ya se encuentra registrado',
                'email.unique' => 'Este correo ya se encuentra registrado',
                'subject.required' => 'El asunto es requerido',
                'message.required' => 'El mensaje es requerido',
                'name.required' => 'El nombre es requerido',
        ];
    }
}