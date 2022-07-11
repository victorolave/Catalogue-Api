<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'size_id' => 'required|integer',
            'brand_id' => 'required|integer',
            'stock' => 'integer',
            'shipment_date' => 'required|date'
        ];
    }

    public function attributes()
    {
        return [
            'size_id' => 'size',
            'brand_id' => 'brand',
            'shipment_date' => 'shipment date'
        ];
    }
}
