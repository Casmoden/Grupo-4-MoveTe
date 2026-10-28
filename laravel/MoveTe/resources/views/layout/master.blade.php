<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MoveTe - @yield('title')</title>

    <link rel="shortcut icon" href="{{asset('img/Chandler.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

    @yield('moreCss')

</head>
<body>
    @include('layout.partials.header')

    <main>
        @yield('content')
    </main>

    @include('layout.partials.footer')

    @yield('moreJs')
</body>
</html>
