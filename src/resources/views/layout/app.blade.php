<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
        <title>@yield('title')</title>
    </head>
    <body>
    <header>
    <a href="/">Home</a>
    <a href="/image/create">new image</a>
    </header>
        <div>
            <h1>@yield('h1Title')</h1>
        </div>
        <div>
           @yield('content') 
        </div>
        
    </body>
</html>
