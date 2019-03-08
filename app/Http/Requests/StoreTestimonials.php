<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTestimonials extends FormRequest
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
            
            'texte'=>'required|min:10',
            'client_id'=>'required',
            
        ];
       
    }
    public function messages(){
        return[
            // 'nom.required'=>'Mettez un prénom de minimum 4 caractères.',

            // 'fonction.min:3'=>'Mettez minimum 3 caractères;',

            // 'fonction.required'=>'Mettez maximum 10 caractères.',

            // 'texte.required'=>'Mettez un texte  de minimum 10 carractères.',

        ];
    }
}
