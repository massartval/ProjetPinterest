<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
        <title>@yield('title')</title>
    </head>
    <body>
    <header class='container-fluid px-4 py-2 d-flex justify-content-between'>
        <div class="mr-3">
            <a href="/">Home</a>
            <a href="/image/create">new image</a>
        </div>
        <div class="ml-3">
            <a href="">Register</a>
            <a href="">Login</a>
        </div>
    </header>
    <div class="container">
        <div class="my-3">
            <h1>@yield('h1Title')</h1>
        </div>
        <div>
           @yield('content') 
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>
