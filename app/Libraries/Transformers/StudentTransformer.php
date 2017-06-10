<?php

/**
 * Created by PhpStorm.
 * User: nitesh
 * Date: 18/5/17
 * Time: 2:31 PM
 */
namespace App\Libraries\Transformers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

use App\Student;

class StudentTransformer extends Transformer
{
    public function transform($student)
    {
//        print_r($student);
        return [
            Student::NAME       => $student['name'],
            Student::USERNAME   => $student['username'],

        ];
    }

    public function requestAdapter()
    {
        $data = [
            Student::NAME       => Input::get('name'),
            Student::USERNAME   => Input::get('username'),


        ];
        return $data;
    }

    public function validate()
    {
        $validations = [
            Student::NAME       => 'required',
            Student::USERNAME   => 'required',

        ];

        return Validator::make($this->requestAdapter(), $validations)
            ->fails();
    }
}