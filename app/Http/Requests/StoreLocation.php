<?php

namespace App\Http\Requests;

use App\Facades\Limit;
use App\Models\Location;
use App\Traits\ApiRequest;
use Illuminate\Foundation\Http\FormRequest;

class StoreLocation extends FormRequest
{
    use ApiRequest;

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
            'name' => 'required|max:191',
            'entry' => 'nullable|string',
            'type' => 'nullable|string|max:191',
            'location_id' => 'nullable|integer|exists:locations,id',
            'image' => 'mimes:jpeg,png,jpg,gif,webp|max:' . Limit::upload(),
            'image_url' => 'nullable|url|active_url',
            'template_id' => 'nullable',
        ];

        /** @var Location $self */
        $self = request()->route('location');
        if (!empty($self)) {
            $rules['location_id'] = 'nullable|integer|not_in:' . ((int) $self->id) . '|exists:locations,id';
        }

        return $this->clean($rules);
    }
}
