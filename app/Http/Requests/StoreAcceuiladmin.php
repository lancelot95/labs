<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAcceuiladmin extends FormRequest
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
            'image'=>'required|image',
            'titrecarousel'=>'required|min:6',
            'titrelabsworld'=>'required|min:2',
            'titrevertworld'=>'required|min:2',
            'titreword'=>'required|min:2',
            'textelabsworld'=>'required|min:5|',
            'textelabsworld'=>'required|min:5',
            'titreclient'=>'required|min:2',
            'titreservice'=>'required|min:2',
            'titreteam'=>'required|min:2',
            'titrestandout'=>'required|min:2',
            'textestandout'=>'required|min:5',
        ];

    }
    public function messages(){
        return[
            // 'image.required'=>'Mettez une image.',

            // 'titrecarousel.required'=>'Mettez un titre de minimum 6 carractères.',

            // 'titrelabsworld.required'=>'Mettez un titre labs world de minimum 10 carractères.',

            // 'titrevertworld.required'=>'Mettez un titre vert world de minimum 10 carractères.',

            // 'titreword.required'=>'Mettez un titre word de minimum 10 carractères.',

            // 'textelabsworld.required'=>'Mettez un texte labs world de minimum 10 carractères.',

            // 'textelabsworld.required'=>'Mettez un texte labs world de maximum 40 carractères.',

            // 'titreclient.required'=>'Mettez un titre client de minimum 10 carractères.',

            // 'titreservice.required'=>'Mettez un titre service de minimum 10 carractères.',
            
            // 'titreteam.required'=>'Mettez un titre team de minimum 10 carractères.',

            // 'titrestandout.required'=>'Mettez un titre stand out de minimum 10 carractères.',

            // 'textestandout.required'=>'Mettez un texte stand out de minimum 10 carractères.',
            
        ];
    }
}
