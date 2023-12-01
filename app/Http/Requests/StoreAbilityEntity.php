<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAbilityEntity extends FormRequest
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
            'ability_id' => 'required|exists:entities,id',
            'visibility_id' => 'required|exists:visibilities,id',
            'entities' => 'required',
            'entities' => [
                '*' => 'different:ability_id|exists:entities,id',
            ],
        ];
    }
}
