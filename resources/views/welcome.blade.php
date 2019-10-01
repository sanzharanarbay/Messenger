<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sanzhar's Messenger</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
       @include('layouts.nav')

       <br>
       <br>
       <section class="jumbotron text-center">
           <div class="container">
               <h1 class="jumbotron-heading">Sanzhar's Messenger</h1>
               <p class="lead text-muted">Please Login or Register to use Messenger!!!</p>
               <p>
                   <a href="{{route('login')}}" class="btn btn-primary my-2">Login</a>
                   <a href="{{route('register')}}" class="btn btn-secondary my-2">Register</a>
               </p>
           </div>
       </section>


    </body>
</html>
