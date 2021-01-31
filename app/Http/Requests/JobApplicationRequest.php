<?php

namespace App\Http\Requests;

use App\Models\JobApplication;
use Illuminate\Foundation\Http\FormRequest;

class JobApplicationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // $application = JobApplication::find($this->route('application'));
        // return $this->user()->can('update', $application);
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
            'first_name' => 'string|required|min:2',
            'last_name' => 'string|required|min:2',
            'email' => 'string|required',
            'phone' => 'string|required|min:11|max:13', // 13 to allow whitespace btw numbers
            'marital_status' => 'string|required',
            'address' => 'string|required',
            // 'dob' => 'date|date_format:Y-m-d',
            'age' => 'numeric',
            'city' => 'string|required',
            'state' => 'string|required',
            'gender' => 'string|required',
            'preferred_role' => 'string|required',
            'recent_job_title' => 'string',
            'total_years_of_xp' => 'string|required',
            'cv' => 'required|max:2048|mimes:pdf,doc,docx',
            'documents' => 'max:2048|mimes:image,pdf,doc,docx,csv,xlx',
        ];
    }
}
