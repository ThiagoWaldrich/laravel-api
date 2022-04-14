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
//Dessa forma são adicionados mais índices no array
//http://127.0.0.1:8000/api/hello-post/dio?foo=bar
//http://127.0.0.1:8000/api/Hello-Post/ThiagoWaldrich?foo=bar&foo1=bar1