<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Course;

class StoreCourseRequest extends FormRequest
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
                // 'unique:courses,name',
                'unique:App\Models\Course,name'
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
