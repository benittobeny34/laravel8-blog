<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <link rel="stylesheet" href="/app.css">
{{--    <link href="https://unpkg.com/tailcwindcss@^2/dist/tailwind.min.css" rel="stylesheet">--}}
</head>

<body>
<header>
    @yield('banner')
</header>
    {{ $slot }}
</body>
</html>