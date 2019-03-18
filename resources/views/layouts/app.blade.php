<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Quickstart - Basic</title>

        <!-- Latest compiled and minified CSS & JS -->
        <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

        <!-- CSS And JavaScript -->
    </head>

    <body>
        <div class="container">
            <!-- <nav class="navbar navbar-default">
            </nav> -->
            @if (\Session::has('msg'))
                <div class="alert alert-success">
                    {!! \Session::get('msg') !!}
                </div>
            @endif
            @if (\Session::has('err'))
                <div class="alert alert-danger">
                    {!! \Session::get('err') !!}
                </div>
            @endif
        </div>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>