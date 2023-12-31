<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "titre"=>'required',
            "description"=>'required',
            "avantage"=>'required',
            "raison"=>'required',
            "type"=>'required',
            "cible"=>'required',
            "website"=>'required',
            "business_plan"=>'required',
            "fond"=>'required'
        ];
    }
}
