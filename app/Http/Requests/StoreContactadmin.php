<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactadmin extends FormRequest
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
            'name'=>'required|min:4',
            'email'=>'required|email',
            'subject'=>'required|min:3',
            'message'=>'required|max:20',
            
        ];
       
    }
    public function messages(){
        return[
            'name.min:4'=>'Mettez un prénom de minimum 4 caractères.',

            'email.required'=>'Mettez une adresse mail valid.',

            'subject.required'=>'Mettez un subject de minimum 3 carractères.',
            

            'message.required'=>'Mettez un message de maximum 20 carractères.',

        ];
    }
}
