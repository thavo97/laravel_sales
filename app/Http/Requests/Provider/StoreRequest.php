<?php

namespace App\Http\Requests\Provider;

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
            'name'=>'required|string|max:255',
            'email'=>'required|email|string|max:255|unique:providers',
            'rfc_provider'=>'required|string|max:13|min:13|unique:providers',
            'address'=>'nullable|string|max:255',
            'phone'=>'required|string|max:12|min:7|unique:providers',
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'Este campo es requerido.',
            'name.string'=>'El valor no es correcto.',
            'name.max'=>'Solo se permiten 255 caracteres.',
            
            'email.required'=>'Este campo es requerido.',
            'email.email'=>'No es un correo electrónico.',
            'email.string'=>'El valor no es correcto.',
            'email.max'=>'Solo se permiten 255 caracteres.',
            'email.unique'=>'Ya se encuentra registrado.',

            'rfc_provider.required'=>'Este campo es requerido.',
            'rfc_provider.string'=>'El valor no es correcto.',
            'rfc_provider.max'=>'Solo se permiten 13 caracteres.',
            'rfc_provider.min'=>'Se requiere de 13 caracteres.',
            'rfc_provider.unique'=>'Ya se encuentra registrado.',

            'address.max'=>'Solo se permiten 255 caracteres.',
            'address.string'=>'El valor no es correcto.',

            'phone.required'=>'Este campo es requerido.',
            'phone.string'=>'El valor no es correcto.',
            'phone.max'=>'Solo se permiten 13 caracteres.',
            'phone.min'=>'Se requiere de 7 caracteres.',
            'phone.unique'=>'Ya se encuentra registrado.',
        ];
    }
}
