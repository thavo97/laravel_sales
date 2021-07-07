<?php

namespace App\Http\Requests\Client;

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
            'name'=>'string|required|max:255',
            'rfc_client'=>'nullable|string||min:13|max:13',
            'address'=>'nullable|string|max:255',
            'phone'=>'string|nullable|min:9|max:9',
            'email'=>'string|nullable|max:255|email:rfc,dns',
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'Este campo es requerido.',
            'name.string'=>'El valor no es correcto.',
            'name.max'=>'Solo se permite 255 caracteres.',

           
            
            'rfc_client.string'=>'El valor no es correcto.',
            'rfc_client.min'=>'Se requiere de 11 caracteres.',
            'rfc_client.max'=>'Solo se permite 11 caracteres.',

            'address.string'=>'El valor no es correcto.',
            'address.max'=>'Solo se permite 255 caracteres.',
            
            'phone.string'=>'El valor no es correcto.',
            'phone.min'=>'Se requiere de 9 caracteres.',
            'phone.max'=>'Solo se permite 9 caracteres.',

            'email.string'=>'El valor no es correcto.',
            'email.max'=>'Solo se permite 255 caracteres.',
            'email.email'=>'No es un correo electrónico.',
        ];
    }
}
