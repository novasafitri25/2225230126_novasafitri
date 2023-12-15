<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Perpustakaan Universitas Sultan Ageng Tirtayasa | @yield('title')</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/bootstrap.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <script type="text/javascript" src="{{ asset('assets') }}/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="{{ asset('assets') }}/js/bootstrap.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    </head>
    <style type="text/css">
        .alert{
            margin-bottom: 0px;
        }
    </style>
    <body>
        <div class="container-semesta" style="background:#d1ecf1">
            @include('menu')
            <div class="alert alert-info text-center" style="padding: 50px">   
                <h4><b>Selamat datang</b> di Perpustakaan Sultan Ageng Tirtayasa</h4>     
            </div>
                @include('banner')
                @include('sidebar')
                @include('footer')
        </div>
    </body>
</html>