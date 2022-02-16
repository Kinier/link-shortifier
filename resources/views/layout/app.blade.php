<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Link Shortener</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <script type="text/javascript" src="{{asset('js/app.js')}}" defer></script>
</head>



<body>
<div class="home-link">
    <div class="site-name">
        <a href="{{url('')}}">Link shortifier</a>
    </div>
</div>

@yield('content')
</body>
</html>
