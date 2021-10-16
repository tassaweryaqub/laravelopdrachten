<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectUpdateRequest extends FormRequest
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
        $project = $this->route('project'); 
        return [
            //
            'name' => 'required |string|min:5|max:45|unique:projects,name,'.$project->id, 
            'description' => 'required |string|unique:projects,description,'.$project->id
        ];
    }
}
