<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller{

    public function hello($name){
        return response()->json(data:"Hello World {$name}");
    }

}
