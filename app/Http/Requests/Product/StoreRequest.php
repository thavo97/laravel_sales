<?php

namespace App\Http\Requests\Product;

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

            'name'=>'string|required|unique:products|max:255',
         
            'sell_price'=>'required',
            'purchase_price'=>'required',

            'code'=>'nullable|string|max:13|min:13',
            
           
        ];
    }
    public function messages()
    {
        return[
            'name.string'=>'El valor no es correcto.',
            'name.required'=>'El campo es requerido.',
            'name.unique'=>'El producto ya está registrado.',
            'name.max'=>'Solo se permite 255 caracteres.',

            

            'sell_price.required'=>'El campo es requerido.',
            'purchase_price.required'=>'El campo es requerido.',

            'code.string'=>'El valor no es correcto.',
            'code.max'=>'Solo se permite 13 dígitos.',
            'code.min'=>'Se requiere de 13 dígitos.',

            


        ];
    }
}
