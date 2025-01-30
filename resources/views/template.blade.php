<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>proyecto senati web</title>
</head>
<body>
<p>
    <a href="{{route('home')}}">Home</a>
    <a href="{{route('blog')}}">Blog</a>
</p>
@yield('content')
</body>
</html>
