<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{   
    // public function setLang($lang){
    //     App::setlocale($lang);
    //     Session::put("lang",$lang);
    //     echo trans('translator.woman');
    //     // return redirect()->back();
    // }
    public function setLang($lang){
        App::setlocale($lang);
        // echo trans('translator.woman');
        return redirect()->back();


    }

}
