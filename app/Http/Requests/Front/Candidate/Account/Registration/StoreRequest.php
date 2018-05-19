<?php

namespace ReclutaTI\Http\Requests\Front\Candidate\Account\Registration;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            'apellidoPaterno' => 'required',
            'correoElectronico' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed'
        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'El campo contraseña es obligatorio.',
            'password.min' => 'El campo contraseña debe poseer al menos 8 carácteres.',
            'password.confirmed' => 'El campo contraseña y su confirmación no coinciden.'
        ];
    }
}
