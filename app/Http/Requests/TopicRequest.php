<?php

namespace App\Http\Requests;

class TopicRequest extends Request
{
    public function rules()
    {
        switch($this->method())
        {
            // CREATE
            case 'POST':
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'title' => 'required|min:3',
                    'body' => 'required|min:10',
                    'category_id' => 'required|numeric',

                ];
            }
            case 'GET':
            case 'DELETE':
            default:
            {
                return [];
            };
        }
    }

    public function messages()
    {
        return [
            'title.min'=>'标题必须最少3个字符',
            'body.min'=>'内容必须最少10个字符',

        ];
    }
}
