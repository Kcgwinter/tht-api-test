<?php

namespace  App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreInvoicePaymentsRequest extends FormRequest
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

            'invoice_id' => ['required'],
            'method' => ['required'],
            'amount' => ['required'],
            'transaction_date' => ['required']
        ];
    }
}
