<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadProjetRequest extends FormRequest
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
    $rules =  [
            'title'=>'required|max:100',
            'description' =>'required',
            'montant_estime'=>'required',
            'categorie' => 'required'
        ];
       $photos = count($this->input('photos'));

        foreach(range(0, $photos) as $index) {
            $rules['photos.' . $index] = 'image|mimes:jpeg,bmp,jpg,png|max:2048';
        }
 
        return $rules;
    }
}
