<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProject extends FormRequest
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
            'titre'=>'required|min:4',
            'text'=>'required|min:3',
            'image'=>'required|image'
            
            
        ];
       
    }
    public function messages(){
        return[
            'titre.required'=>'Mettez un titre de minimum de 4 caractères.',

            'text.required'=>'Mettez un text minimum de 3 caractères;',

            'image.required'=>'Mettez une image.',


        ];
    }
}
