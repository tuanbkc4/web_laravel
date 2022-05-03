<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Course;


class UpdateCourseRequest extends FormRequest
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
            'name' => [
                'bail',
                'required' ,
                // Rule::unique('courses')->ignore($this->course),
                Rule::unique(Course::class)->ignore($this->course),
            ],

        ];
    }

    public function messages()
    {
        return [
            'name.required' => ':attribute Bắt buộc phải điền',
            'name.unique' => ':attribute đã được dùng',
            // 'name' => [
            //     'bail',
            //     'required'=> 'không được để trống',
            //     'unique:courses,name'
            // ],

        ];
    }

    public function attributes()
    {
        return [
            "name" => "Name Course",
        ];
    }
}
