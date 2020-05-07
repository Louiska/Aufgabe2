<!DOCTYPE html>
<html lang="en">
    <head>
      @yield('header')
          <title>{{config('app.name')}}</title>
                <meta charset="utf-8">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
                <!-- Latest compiled JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

                <!-- Glyphicon-Ersatz: Font-Awesome -->
                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
                <link rel="manifest" href="/manifest.json">
                <link rel="stylesheet" type="text/css" href="css/main.css">

  <link rel="stylesheet" type="text/css" href="css/one-page-wonder.css">

       </head>
    <body>
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
          <a class="navbar-brand" href="/">
            <!-- <img class="pr-1 pd-1"src="img/logo.svg" alt="Logo" style="width:30px;">{{config('app.name')}}</a> -->
          @yield('nav')
        </div>
      </nav>
        <div class="container">
              @yield('content')
        </div>
    </body>
