<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('styles/global.css')}}">
    </head>

    <body>
        <?php include 'sidebar.php' ?>
    </body>
</html>
