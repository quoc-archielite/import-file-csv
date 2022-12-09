<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FileRequest extends FormRequest
{
    public function rules()
    {
        return [
            'file_csv' => [
                'required',
                'file',
                'mimes:csv',
                'max:100000',
            ],
        ];
    }
}
