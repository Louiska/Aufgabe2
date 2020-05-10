@extends('templates.main')
<!-- erweitere das main-Template -->
@section('header')
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <!-- Styles -->
@endsection
@section('content')
<div class="title m-b-md">
            <div class="content">
                    {{config('app.name')}}
                </div>
                <!-- Formular zum Übergeben von Daten über die Route (Submit) an den Controller.
              Eigentlich übergibt man Daten via POST an die Datenbank, aber da wir hier keine haben
            und die Daten auch nicht speichern, reicht GET-->
                <form action="{{ url('/submit')}}" method="GET" class="form-horizontal">
                <div class="input-group">
                  <!-- Hier sollte eigentlich ein cooles Icon vor dem Input sein,
                aber funktioniert nicht so ganz -->
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                  </div>
                  <input type="date"class="form-control" id="eDate" name="eDate" required autofocus><br>
                </div>
                <input type="submit" id="submit" class="btn btn-primary float-right">
            </form>
            <!-- Wenn ein Wert übergeben wurde über den Controller -->
            @if($possible)
            möglich
            @else
            nicht möglich
            @endif
                </div>
            </div>
        </div>
@endsection
