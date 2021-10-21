<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Bochi') }}</title>

        <!-- Add Css and Js links -->
        @include('extras.frontend.css')
        @include('extras.frontend.js')


    </head>

    @include('extras.frontend.navbar')

    <body class="content-body">

      <div class="section-content">
        @yield('content')
      </div>

    </body>

    @include('extras.frontend.footer')
</html>
