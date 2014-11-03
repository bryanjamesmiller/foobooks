<!DOCTYPE html>
<html>
<head>

    <title>@yield('title','Foobooks')</title>
    <meta charset='utf-8'>

<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">
    <link rel='stylesheet' href='foobooks.css' type='text/css'>

    @yield('head')


</head>
<body>

<img src='images/foobooks-picture.PNG' alt='Foobooks logo'>

@yield('content')

@yield('body')

</body>
</html>