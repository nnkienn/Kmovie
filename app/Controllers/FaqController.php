<?php

namespace App\Controllers;
use System\Src\Controller;
class FaqController extends Controller{
    public function index(){
        return view('faq',[
                'title' => 'Kflix – Online Movies, TV Shows & Cinema',

        ]
    );
    }
}