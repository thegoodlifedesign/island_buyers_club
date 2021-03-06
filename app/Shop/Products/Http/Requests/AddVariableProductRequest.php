<?php namespace TGL\Shop\Products\Http\Requests;

use TGL\Core\Http\Requests\Request;

class AddVariableProductRequest extends Request
{
    /*
         * Get the validation rules that apply to the request.
         *
         * @return array
         */
    public function rules()
    {
        return [
            'images' => 'required',
            'name' => 'required',
            'description' => 'required',
            'short_description' => 'required',
            'width' => 'required',
            'length' => 'required',
            'height' => 'required',
            'price' => 'required',
            'options' => 'required',
            'option_values' => 'required',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}