<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use const true;

class ProductAddRequest extends FormRequest
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
            'name' =>['required','unique:products'],
            'cat_id' =>['required'],
            'size_id' =>['required'],
            'color_id' =>['required'],
            'price' =>['required'],
            'sell_price' =>['required'],
            'quantity' =>['required'],
            'image' =>['required'],
            'hover_image' =>['required'],
            'slider_images' =>['required'],
            'short_des' =>['required'],
            'tag' =>['required'],
            'long_des' =>['required'],
        ];
    }
}
