<?php

namespace App\Http\Requests\Stakeholders;

use Illuminate\Foundation\Http\FormRequest;

class StakeholderUpdateRequest extends FormRequest
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
            'project_role_id' => 'required|exists:project_roles,id|numeric', 
        ];
    }
}
