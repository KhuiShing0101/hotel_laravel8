<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ViewStoreRequest extends FormRequest

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return
        [
            'name'=>
            [
                'required',

                Rule::unique('view')
                    -> where
                (function($query)
                    {
                        return $query
                        -> where('name',$this->name)
                        -> where('deleted_at',null);
                    }),

                'max:20'

            ]
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'You have to fill view name',
            'name.unique'   =>  'This name is already Exit',
            'name.max'      => 'View name allow under 20 characters'
        ];
    }
}
