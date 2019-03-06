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
            'image' => 'required|image',
            'name' => 'required',
           'rank' => 'required',
            'comment' => 'required',
        ];
    }

    public function messages(){
        return[
        'image.required'=> "Veuillez placer une image",
        'image.image'=> "Le fichier doit être une image",
        'name.required'=> "Veuillez indiquer le nom",
        'rank.required'=> "Veuillez indiquer la profession",
        'comment.required'=> "Veuillez laisser un commentaire",
        ];
    }
}
