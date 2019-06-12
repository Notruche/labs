<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContent extends FormRequest
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
            'title' => 'required|max:360|alpha',
        ];
    }

    public function messages(){
        return[
        'title.required'=> "Veuillez entrer du texte",
        'title.max:360'=> "Le texte est trop long !",
        ];
    }
}
