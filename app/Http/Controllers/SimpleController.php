<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleController extends Controller
{
    public function test()
    {
        $profile = [
            'student_id' => '12345',
            'full_name' => 'samark chaisanguan',
            'nickname' => 'max',
            'major' => 'computer sci',
            'faculty' => 'sci',
            'year' => '4',
            'address' => [
                'home' => '761/16',
                'distict' => 'dindange',
                'subdistict' => 'dindange',
                'province' => 'Bankok',
                'post_code' => '10110',
            ],
        ];
        foreach ($profile as $key => $value) {
            if (!is_array($value)) {
                echo $key . ' :: ' . $value . '<br>';
            } else {
                echo 'home ::' . $value['home'] . '<br>';
                echo 'distict ::' . $value['distict'] . '<br>';
                echo 'subdistict ::' . $value['subdistict'] . '<br>';
                echo 'province ::' . $value['province'] . '<br>';
                echo 'post code ::' . $value['post_code'] . '<br>';
            }
        }
        //return $profile;
    }
}
