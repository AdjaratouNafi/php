<?php

namespace GetCandy\Api\Http\Requests\Shipping\Pricing;

use GetCandy\Api\Http\Requests\FormRequest;

class EstimateRequest extends FormRequest
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
            'amount' => 'required|numeric',
            'zip' => 'required',
        ];
    }
}
