<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title'=>'required|string|min:3|max:40', 
            'body'=>'required|string|min:10|max:300',
        ];
    } 

    public function messages()
    {
        return [
            'title.required' => 'Il campo e obbligatorio',
            'body.required' => 'Il campo è obbligatorio',
            'title.min' => 'Il campo deve contenere almeno 3 caratteri',
            'title.max' => 'Il campo non può contenere più di 40 caratteri',
            
            'body.min' => 'Il campo deve contenere almeno 10 caratteri',
            'body.max' => 'Il campo non può contenere più di 300 caratteri',
        ];
    }
}
