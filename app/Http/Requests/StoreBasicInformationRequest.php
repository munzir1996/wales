<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBasicInformationRequest extends FormRequest
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
            'project_name' => 'required',
            'project_status' => 'required',
            'start_date' => 'required',
            'execution_time' => 'required',
            'owner' => 'required',
            'advisor' => 'required',
            'funded' => 'required',
            'total_cost' => 'required',
            'state_id' => 'required',
            'local_id' => 'required',
            'region_id' => 'required',
            'project_manager' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
            'well_depth' => 'required',
            'packaging_depth' => 'required',
            'swl' => 'required',
            'dwl' => 'required',
            'productivity' => 'required',
            'psd' => 'required',
            'water_analysis_test_file' => 'sometimes',
            'geophysical_study_file' => 'sometimes',
            'full_well_details_file' => 'sometimes',
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
            'project_name.required' => 'إسم المشروع مطلوب',
            'project_status.required' => 'حاله المشروع مطلوبه',
            'start_date.required' => 'تاريخ التنفيذ مطلوب',
            'execution_time.required' => 'مدة التنفيذ مطلوب',
            'owner.required' => 'الجهة المالكة مطلوبة',
            'advisor.required' => 'الجهة الأستشارية مطلوبة',
            'funded.required' => 'الجهة الممولة مطلوبة',
            'total_cost.required' => 'التكلفة الكلية مطلوبة',
            'state_id.required' => 'الولاية مطلوبة',
            'local_id.required' => 'المحلية مطلوبة',
            'region_id.required' => 'المنطقة مطلوبة',
            'project_manager.required' => 'مدير المشروع مطلوب',
            'longitude' => 'خط الطول مطلوب',
            'latitude' => 'خط العرض مطلوب',
            'well_depth' => 'عمق البئر مطلوب',
            'packaging_depth' => 'عمق التغليف مطلوب',
            'swl' => 'مستوي المياه الثابت مطلوب',
            'dwl' => 'مستوي المياه المتحرك مطلوب',
            'productivity' => 'الأنتاجية مطلوبة',
            'psd' => 'مستوي الإنزال مطلوب',
        ];
    }
}
