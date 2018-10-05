<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','default')</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet">
    <style>

        h1{
            font-family: 'Merriweather Sans', sans-serif;
        }

        .jumbotron{
            margin-top: 80px;
            background-color: rgb(230, 242, 255);
        }

        .btn-new{
            color: white;
            background-color: rgb(102, 176, 255);
            border-color: rgb(26, 136, 255);
        }

        .btn-new:hover{
            color: rgb(102, 176, 255);
            background-color: white;
            border-color: rgb(26, 136, 255);
        }

        .btn-new:active{
            color: rgb(102, 176, 255);
            background-color: white;
            border-color: rgb(26, 136, 255);
        }

        .title{
            margin-top:50px;
        }

    </style>
</head>
<body>
    @yield('nav')
    <div class="container">
        @yield('content')
    </div>
</body>
</html>