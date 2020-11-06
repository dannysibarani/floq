<?php

namespace App\Http\Requests\ProjectRoles;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRoleUpdateRequest extends FormRequest
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
            'name' => 'required|unique:project_roles,project_id,name|max:255', 
            'description' => 'required|max:255', 
        ];
    }
}
