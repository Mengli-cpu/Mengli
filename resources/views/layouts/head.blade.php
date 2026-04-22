<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="{{ asset("/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{ asset("/css/bootstrap-icons.min.css")}}">
    <link rel="stylesheet" href="{{ asset("/css/main.css")}}">

    <link rel="stylesheet" href="{{ asset("/js/bootstrap.bundle.min.js")}}">
</head>

<body class="bg-dark">
    @include('partials.navbar')
    @yield('main-content')
</body>

</html>