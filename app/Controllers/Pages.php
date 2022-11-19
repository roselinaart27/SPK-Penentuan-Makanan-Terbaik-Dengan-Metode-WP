<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | SPK'
        ];

        return view('pages/login', $data);
    }
}
