<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calculator extends Controller
{
    public function index(){
        return view("calculator");
    }
    public function calculate(Request $request){
        $total=$request->result;
        $result = eval("return ".$total.";");
        return view("calculator",compact("result"));
    }
}
