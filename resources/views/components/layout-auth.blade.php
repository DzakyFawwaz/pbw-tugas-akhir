<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Mrs+Saint+Delafield&display=swap"
      rel="stylesheet"
    />

        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/auth.css'])


    <title>{{$title}}</title>
  </head>
  <body>
    <div class="container">
      <div class="square-1"></div>
      <div class="square-2"></div>

      <section class="curtain-container">
        <div class="curtain curtain-1"></div>
        <div class="curtain curtain-2"></div>
        <div class="curtain curtain-3"></div>
        <div class="curtain curtain-4"></div>
      </section>

      {{$slot}}
    </div>
  </body>
</html>
