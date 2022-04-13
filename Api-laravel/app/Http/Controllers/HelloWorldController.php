<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller{

    public function hello($name){
        return response()->json([
            "Oi"=>"Hello World {$name}",
            "Tchau"=>"Bye bye {$name}"]);
    }
}
