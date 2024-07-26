<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //
    public function servicesOne(){
        return view('pages/services-one');
    }
    public function servicesTwo(){
        return view('pages/services-two');
    }
    public function servicesThree(){
        return view('pages/services-three');
    }
    public function servicesFour(){
        return view('pages/services-four');
    }
}
