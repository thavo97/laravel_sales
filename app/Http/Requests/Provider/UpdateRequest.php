<?php

namespace App\Http\Requests\Provider;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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

            'email'=>'required|email|string|unique:providers,email,'. $this->route('provider')->id.'|max:255', 


            'rfc_provider'=>'required|string|min:13|unique:providers,rfc_provider,'. $this->route('provider')->id.'|max:13', 

            'address'=>'nullable|string|max:255',
            'phone'=>'required|string|min:7|unique:providers,phone,'. $this->route('provider')->id.'|max:13', 
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
            'rfc_provider.max'=>'Solo se permiten 11 caracteres.',
            'rfc_provider.min'=>'Se requiere de 11 caracteres.',
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
