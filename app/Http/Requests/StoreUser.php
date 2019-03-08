<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'name'=>'required|alpha|min:4',
            'email'=>'required|alpha|email',
            'password'=>'required|alpha|min:4',
            'image'=>'required|image|mimes:jpg,png',
            
        ];
       
    }
    public function messages(){
        return[
            // 'name.required'=>'Mettez un prénom de minimum 4.',

            // 'email.required'=>'Mettez une adresse email valide.',

            // 'password.required'=>'Mettez un mot de passe de minimum 10 carractères.',

        ];
    }
}
