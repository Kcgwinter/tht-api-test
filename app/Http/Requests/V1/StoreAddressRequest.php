<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAddressRequest extends FormRequest
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
            'name' => ['required'],
            'customer_id' => ['required'],
            'street' => ['required'],
            'street2' => ['required'],
            'city' => ['required'],
            'state' => ['required'],
            'postalCode' => ['required'],
            'country' => ['nullable']
        ];
    }

}
