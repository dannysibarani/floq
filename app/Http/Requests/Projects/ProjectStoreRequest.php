<?php

namespace App\Http\Requests\Projects;

use Illuminate\Foundation\Http\FormRequest;

class ProjectStoreRequest extends FormRequest
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
            'date_prepared' => 'required|date_format:"Y-m-d H:i:s"', //Y/m/d
            'name' => 'required|unique:projects,name', 
            'project_title' => 'required', 
        ];
    }
}
