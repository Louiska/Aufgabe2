<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KlausurController extends Controller
{
    // returnt einfach das standard-view
    public function index(){
      return view('index');
    }
    public function submit(Request $request){ //nimmt die Daten vom View
      $possible = KlausurController::checkIfPossible($request['eDate']); //ruft die jeweilige Funktion auf
      return view('index')->with([ 'possible'=> $possible]); //return das Ergebnis
    }

    public function checkIfPossible($date){
      //Hier Json-Data durchlaufen und Abfragen etc
    }
}
