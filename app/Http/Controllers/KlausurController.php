<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KlausurController extends Controller
{
    public function index(){
      return view('index');
    }
    public function submit(Request $request){
      return view('index')->with([ 'possible'=> $request['eDate']]);
    } 
}
