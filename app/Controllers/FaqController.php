<?php

namespace App\Controllers;
use System\Src\Controller;
class FaqController extends Controller{
    public function index(){
        return view('main',[
                'title' => 'Kflix',
                'template' => 'faq'

        ]
    );
    }
}