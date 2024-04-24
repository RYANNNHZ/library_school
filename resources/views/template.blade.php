<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>page | {{ $title }}</title>
    <link rel="stylesheet" href="{{ url('css') . '/bootstrap.css' }}">
    <link rel="stylesheet" href="{{ url('icon') . '/font/bootstrap-icons.css' }}">
</head>

<body>

    @yield('content')

    <script src="{{ url('js') . '/popper.js' }}"></script>
    <script src="{{ url('js') . '/bootstrap.js' }}"></script>
    <script src="{{ url('js') . '/App.js' }}"></script>
</body>

</html>
