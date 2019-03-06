<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjet extends FormRequest
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
            'image' => 'required|image',
            'title' => 'required',
           'desc' => 'required',
           'icon' => 'required',
        ];
    }

    public function messages(){
        return[
        'image.required'=> "Veuillez placer une image",
        'image.image'=> "Le fichier doit être une image",
        'title.required'=> "Veuillez indiquer un titre",
        'desc.required'=> "Impossible de publier un projet vide",
        'icon.required'=> "Veuillez sélectionner une icone",
        ];
    }
}
