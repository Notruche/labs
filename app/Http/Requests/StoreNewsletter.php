<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsletter extends FormRequest
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
            'email' => 'required|email|unique:subscribers'
        ];
    }

    public function messages(){
        return[
        'email.required'=> "Veuillez entrer un email",
        'email.email'=> "Email non valide",
        'email.unique'=> "Cet email est déjà enregistré",
        ];
    }
}
