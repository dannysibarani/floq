<?php

namespace App\Http\Requests\Stakeholders;

use Illuminate\Foundation\Http\FormRequest;

class StakeholderStoreRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id|numeric', 
            'project_id' => 'required|exists:projects,id|numeric', 
            'project_role_id' => 'required|exists:project_roles,id|numeric', 
        ];
    }
}