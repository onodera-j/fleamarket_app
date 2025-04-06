<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PurchaseRequest extends FormRequest
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
            "payment_method" => ["required"],
            "post_code" => ["required"],
            "address" => ["required"],
            "building" => ["required"],
        ];
    }

    public function messages()
    {
        return [
            "payment_method.required" => "支払い方法を選択してください",
            "post_code.required" => "郵便番号が登録されていません",
            "address.required" => "住所が登録されていません",
            "building.required" => "建物名が登録されていません"
            ];
    }
}
