<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Laravel Ireland</title>
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
<div class="flex flex-col">
    <div class="min-h-screen flex items-center justify-center">
        <div class="flex flex-col justify-around h-full">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
