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
            'start_date' => 'required',
            'execution_time' => 'required',
            'owner' => 'required',
            'advisor' => 'required',
            'funded' => 'required',
            'total_cost' => 'required',
            'state_id' => 'required',
            'local_id' => 'required',
            'region_id' => 'required',
            'project_manager_id' => 'required',
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
            'start_date.required' => 'تاريخ التنفيذ مطلوب',
            'execution_time.required' => 'مدة التنفيذ مطلوب',
            'owner.required' => 'الجهة المالكة مطلوبة',
            'advisor.required' => 'الجهة الأستشارية مطلوبة',
            'funded.required' => 'الجهة الممولة مطلوبة',
            'total_cost.required' => 'التكلفة الكلية مطلوبة',
            'state_id.required' => 'الولاية مطلوبة',
            'local_id.required' => 'المحلية مطلوبة',
            'region_id.required' => 'المنطقة مطلوبة',
            'project_manager_id.required' => 'مدير المشروع مطلوب',
        ];
    }
}
