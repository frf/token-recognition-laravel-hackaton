<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCustomerOrdersRequest extends FormRequest
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
            'customer_id' => 'required|numeric',
            'seller_id' => 'required|numeric',
            'name_product' => 'required',
            'name_customer' => 'required',
            'value_transaction' => 'required|numeric',
            'type_payment' => 'required|numeric|max:3'
        ];
    }
}
