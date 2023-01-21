<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreFoldersRequest extends FormRequest
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
            'name' => 'required',
            'national_ID' => 'required',
            'issuer' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'occupation' => 'required',
            'gender' => 'required',
            'purpose' => 'required',
            'card_expiry_date' => 'required',
            'traffic_investigation' => 'required',
        ];
    }
}
