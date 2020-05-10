<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KlausurController extends Controller
{
    // returnt einfach das standard-view
    public function index(){
          return view('index')->with(['possible' => -1]); //return das Ergebnis
    }
    public function submit(Request $request){ //nimmt die Daten vom View
        $possible = KlausurController::checkIfPossible($request['eDate']); //ruft die jeweilige Funktion auf
        return view('index')->with(['possible' =>$possible]); //return das Ergebnis
    }

    public function checkIfPossible($date){
      $data = '[{
      "semester":"SoSe2019",
      "start":"2019-04-15",
      "end":"2019-07-19"
   },
   {
      "semester":"WiSe2019/2020",
      "start":"2019-10-21",
      "end":"2020-02-07"
   },
   {
      "semester":"SoSe2020",
      "start":"2020-04-14",
      "end":"2020-07-17"
   },
   {
      "semester":"WiSe2020/2021",
      "start":"2020-10-26",
      "end":"2021-02-12"
   }]'; // put the contents of the file into a variable
      $examNotInSemester = true;
      $date=strtotime($date);
      $json = json_decode($data); // decode the JSON feed
      foreach($json as $jsondata){
        $start= strtotime($jsondata->start);
        $end = strtotime($jsondata->end);
        if(($date>$start) and ($date<$end)){
          $examNotInSemester = false; //TODO: abbrechen der foreach, wenn Treffer?
        }
      }
      return $examNotInSemester;
    }
}
