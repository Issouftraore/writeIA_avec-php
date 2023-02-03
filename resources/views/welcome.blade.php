<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Easy-Life</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="https://fonts.bunny.net/css2?family=Space+Grotesk:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="asset/css/style.css">
        <link rel="stylesheet" href="{{asset('asset/css/boostrap.min.css')}}">
        <script src="https://cdn.tailwindcss.com"></script>

        <style>
            body {
                font-family: 'Space Grotesk', sans-serif;
            }
            .title:empty:before {
                content:attr(data-placeholder);
                color:gray
            }
        </style>

        <script src="https://unpkg.com/marked" defer></script>

    </head>
    <body class="antialiased">
        <div class="container">
          <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
              <svg class="bi me-2" width="40" height="32"><use xlink:href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.tf1.fr%2Ftfx%2Fnaruto&psig=AOvVaw33A3kEiDdNQG2aVTwBt1gU&ust=1674924306965000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCLCG5baZ6PwCFQAAAAAdAAAAABAE"/></svg>
              <img src="{{asset('asset/image/facilDis.PNG')}}" width="200px" height="100px" alt="">
            </a>

            <ul class="nav nav-pills">
              <li class="nav-item"><a href="/write" class="nav-link active" aria-current="page">Home</a></li>
              <li class="nav-item"><a href="footer-basic" class="nav-link">About</a></li>
            </ul>
          </header>
       </div>
        <div class="relative flex items-top justify-center min-h-screen bg-white-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0 mt-0">
            <div class="max-w-4xl w-full mx-auto sm:px-6 lg:px-8 space-y-4 py-4 mt-0">
                <div class="text-center text-gray-800 dark:text-gray-300 py-2 mt-0">
                    <h1 class="text-6xl font-bold">ChatBox</h1>
                </div>

                <div class="w-full rounded-md bg-white border-2 border-gray-600 p-4 min-h-[60px] h-full text-gray-600">
                    <form action="/write/generate" method="post" class="inline-flex gap-2 w-full">
                        @csrf
                        <input required name="title" class="w-full outline-none text-2xl font-bold" placeholder="Type your article title..." />
                        <button class="rounded-md bg-emerald-500 px-4 py-2 text-white font-semibold">Generer</button>
                    </form>
                </div>
                <div class="w-full rounded-md bg-white border-2 border-gray-600 p-4 min-h-[120px] h-full text-gray-600">
                    <textarea class="min-h-[120px] h-full w-full outline-none" spellcheck="false">{{ $content }}</textarea>
                </div>
            </div>
        </div>

        <div class="footer-basic">
            <footer>
                <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#">Home</a></li>
                    <li class="list-inline-item"><a href="#">Services</a></li>
                    <li class="list-inline-item"><a href="#">About</a></li>
                    <li class="list-inline-item"><a href="#">Terms</a></li>
                    <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                </ul>
                <p class="copyright">issouftra673@gmail.com</p>
            </footer>
        </div>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>
