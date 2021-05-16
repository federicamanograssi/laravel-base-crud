<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    {{-- per css personalizzato --}}
    @yield('css')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>@yield('pageTitle') | My Shop</title>
</head>

<body>
    
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>