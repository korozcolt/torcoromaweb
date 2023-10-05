<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreChatbotRequest extends FormRequest
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
            'ask' => 'required|string|regex:/^[\s\w-]*$/u|unique:chatbots',
            'answer' => 'required|string|unique:chatbots',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
                'ask.unique' => 'Esta pregunta ya se encuentra registrada',
                'answer.unique' => 'Esta respuesta ya se encuentra registrada',
                'ask.required' => 'La pregunta es requerida',
                'answer.required' => 'La respuesta es requerida',
                'ask.regex' => 'La pregunta solo puede contener letras',
        ];
    }

    /**
     * Get the attributes names.
     *
     * @return array<string, mixed>
     */
    public function attributes()
    {
        return [
            'ask' => 'ask',
        ];
    }
}