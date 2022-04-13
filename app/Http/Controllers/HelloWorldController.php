<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller{

    public function hello($name, Request $request){

        return response()->json([
            "Oi"=>"Hello World {$name}",
            "Tchau"=>"Bye bye {$name}",
            "Salve"=>$request->all()
        ]);
    }
}
