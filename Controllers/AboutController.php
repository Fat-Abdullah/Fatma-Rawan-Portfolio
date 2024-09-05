<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    // public function greet($name="fatt"){
    //     return "Welcome $name to my website";
    // }
   

    public function infos( $name="Fatma Abdullah Bkier",$birth="16/5/2002",$live="yemen/Hadramout/Fowah",$sit="University Students")
    {
        return view("web.about",[
            'name'=>$name,
            'birth'=>$birth,
            'live'=>$live,
            'sit'=>$sit
            
    ]
);
    }
}

