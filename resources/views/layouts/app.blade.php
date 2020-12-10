<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- js --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
 {{-- fonts --}}

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">

    {{-- Style --}}

    <link  href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Todo App</title>
</head>
<body>
    
    @yield('content')



    
</body>
</html>