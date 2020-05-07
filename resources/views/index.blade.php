@extends('templates.main')
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
                <form action="{{ url('/submit')}}" method="POST" class="form-horizontal">
                @csrf <!-- wird benötigt für POST siehe Laravel-Doc   -->
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                  </div>
                  <input type="text" class="form-control" id="eDate" name="eDate" maxlength="30" placeholder="Tag prüfen"
                  required autofocus><br>
                </div>
                <input type="submit" id="submit" class="btn btn-primary float-right">
            </form>
                </div>
            </div>
        </div>
@endsection
