<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticle extends FormRequest
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
            // 'img'=>'required|mimes:jpeg,jpg,png',
            'titre'=>'required|alpha|min:2',
            'texte'=>'required|alpha|max:40',
            // 'tags[]'=>'required|min:1',
            // 'categorie_id'=>'required|min:1'
        ];

    }
    // public function messages(){
    //     return[
    //         'image.required'=>'Mettez une image.',

    //         'titre.required'=>'Mettez un titre de minimum 6 carractères.',

    //         'texte.required'=>'Mettez un texte de maximum 10 carractères.',

    //         'tag.required'=>'Mettez un minimum  1 carractère.',

    //         'categorie.required'=>'Mettez un minimum 1 carractère.',
            
    //     ];
    }

