<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>

        <link rel="icon" href="{{Vite::asset('/resources/images/favicon.ico ')}}" >

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- assets compiler -->
        @vite('resources/js/app.js')
    </head>
    <body>
        <!-- include header -->
        @include('partials.header')

        <!-- main content -->
        @yield('main-content')

        <!-- include footer -->
        @include('partials.footer')
    </body>
</html>