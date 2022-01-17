<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWellRequest extends FormRequest
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
            'longitude' => 'required',
            'latitude' => 'required',
            'well_depth' => 'required',
            'packaging_depth' => 'required',
            'swl' => 'required',
            'dwl' => 'required',
            'productivity' => 'required',
            'psd' => 'required',
            'basic_information_id' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'longitude' => 'خط الطول مطلوب',
            'latitude' => 'خط العرض مطلوب',
            'well_depth' => 'عمق البئر مطلوب',
            'packaging_depth' => 'عمق التغليف مطلوب',
            'swl' => 'مستوي المياه الثابت مطلوب',
            'dwl' => 'مستوي المياه المتحرك مطلوب',
            'productivity' => 'الأنتاجية مطلوبة',
            'psd' => 'مستوي الإنزال مطلوب',
            'basic_information_id' => 'المعلومات الأساسية مطلوبة',
        ];
    }
}
