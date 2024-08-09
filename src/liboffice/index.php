<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Laravel</title>

    <!-- Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
      rel="stylesheet"
    />

    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->

    <style>
      body {
        font-family: "Nunito", sans-serif;
      }
    </style>
  </head>

  <body class="antialiased">
    <div class="bg-gray-100">
      <!-- <img src="library.jpg" width="5%" style="padding-right: 10px;border-radius: 10%;" class="sm:w-5" /> -->
      <div class="flex h-screen justify-center items-center px-2">
        <img src="library.jpg" class="w-24 h-24 mr-2 rounded-l-lg" />
        <h1 class="text-2xl font-bold">Library Develope MSU</h1>
      </div>
    </div>
  </body>
</html>