<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Helpful Toolbox</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }} ">
</head>

<body class="antialiased">
    <section class="titleSection">
        <h1>Welcome to</h1>
        <h1>The Helpful Toolbox Backend</h1>
        <img src="{{ asset('img/Logo.png') }}" alt="The Helpful Toolbox">
        <section class="UrlSection">
            If you want to connect your application with <br> the backend your connnection url is: <p class="connectionUrl">
                {{ url()->current() }}</p>
        </section>
        <section class="checkDB">
            <label><input type="checkbox" @if($dbCheck)checked @endif name="dbConnection" onclick="return false;">Database Connection</label>

        </section>

</body>

</html>
