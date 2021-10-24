<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskStoreRequest extends FormRequest
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
            //
            'task' => 'required|min:10|max:200|unique:tasks', 
            'begindate' => 'required', 
            'enddate' => 'optional',  
            'project_id|required|integer|unique:projects', 
            'activity_id|required|integer|unique:activities', 

      


        ];
    }
}