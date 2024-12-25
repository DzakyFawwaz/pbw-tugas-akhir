<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>Dashboard</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/dashboard.css'])

      </head>
      <body>
        <x-navbar></x-navbar>

        <div class="navigation-accessories navigation-accessories-1"></div>
        <div class="navigation-accessories navigation-accessories-2"></div>
        <div class="navigation-accessories navigation-accessories-3"></div>




        {{$slot}}

      </body>
    </html>
