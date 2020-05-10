@extends('templates.main')
<!-- erweitere das main-Template -->
@section('header')
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <!-- Styles -->
@endsection
@section('content')
              <h1 class="text-center display-4">
                  {{config('app.name')}} <!--Gespeichert unter config ->app -->
              </h1>
                <!-- Formular zum Übergeben von Daten über die Route (Submit) an den Controller.
              Eigentlich übergibt man Daten via POST an die Datenbank, aber da wir hier keine haben
            und die Daten auch nicht speichern, reicht GET-->
                <form action="{{ url('/submit')}}" method="GET" class="form-horizontal">
                <div class="form-group">
                  <label for="eDate">Bitte geben Sie das gewünschte Datum in das Feld ein</label>
                  <input type="date"class="form-control" id="eDate" name="eDate" required autofocus><br>
                </div>
                <!--  Checkbox  -->
                <div class="checkbox">
                    <input type="checkbox" name="checkWeekend" id="checkWeekend">
                    <label for="checkWeekend">Wochenende Prüfen?</label>
                </div>

                <!--  Normales  einzeiliges  Eingabefeld  -->
                <div class="form-group">
                    <label for="input1">Bitte geben Sie den Namen der Klausur ein</label>
                    <input  type="text" class="form-control" name="examName" id="examName" placeholder="Klausurname">
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Absenden</button>
            </form>
            möglich?: {{$possible}} <br>
            Wochenende? {{$isWeekend}} <br>
            Klausurname: {{$examName}}
                </div>
            </div>
        </div>
@endsection
