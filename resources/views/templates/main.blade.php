<!DOCTYPE html>
<html lang="en">
    <head>
      <!-- Biete Möglichkeit, bei jeder Seite einen Header hinzuzufügen -->
      @yield('header')
          <!-- Appname im Ordner Conifg -> App festgelegt -->
          <title>{{config('app.name')}}</title>
                <meta charset="utf-8">
                <!-- wird für HTTP POST benötigt (siehe Laravel doc) -->
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <!-- Bootstrap -->
                    <!-- Latest compiled and minified CSS -->
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
                    <!-- Latest compiled JavaScript -->
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
                <!-- Glyphicons: Font-Awesome -->
                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>

    <body>
      <!-- alle Daten werden in einen Container gesteckt, damit sie mehr oder weniger
    automatisch responsive werden -->
        <div class="container">
              @yield('content')
        </div>
    </body>
