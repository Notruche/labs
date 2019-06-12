<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContact extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
           'subject' => 'required',
        ];
    }

    public function messages(){
        return[
        'name.required'=> "Veuillez indiquer votre nom",
        'email.required'=> "Veuillez indiquer votre email",
        'subject.required'=> "Veuillez indiquer un sujet",
        ];
    }
}
