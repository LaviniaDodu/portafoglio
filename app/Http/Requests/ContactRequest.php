<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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

     public function message() 
     {
         return [
            'name' => 'required|min:3|max:30',
             'email.required' => 'Obligatorio', 
             'message.required' => 'Obligatorio'
         ]; 
     } 

    public function rules()
    {
        return [
            'name.min' => 'Il nome deve essere lungo almeno 3 caratteri',
            'email' => 'required|email:rfc,dns', 
            'message' => 'required' 
        ]; 
    }
}
