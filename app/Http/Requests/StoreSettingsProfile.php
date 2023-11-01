<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSettingsProfile extends FormRequest
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
        $rules = [
            'name' => 'required|string|min:2',
            'newsletter' => 'boolean',
            'has_last_login_sharing' => 'boolean',
            'avatar' => 'mimes:jpeg,png,jpg,gif,webp|max:8192',
        ];

        return $rules;
    }
}
