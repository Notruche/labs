<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreService extends FormRequest
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
        'title' => 'required',
           'desc' => 'required',
           'icon' => 'required',
        ];
    }

    public function messages(){
        return[
        'title.required'=> "Veuillez indiquer un titre",
        'desc.required'=> "Impossible de publier un service vide",
        'icon.required'=> "Veuillez sélectionner une icone",
        ];
    }
}
