<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <nav class="col-sm-3 col-md-2 d-none d-sm-block sidebar">
                    @include('_partials.sidebar')
                </nav>
                <main class="col-sm-9 ml-sm-auto col-md-9 pt-3 main">
                    @yield('body')
                </main>
            </div>
        </div>
    </body>
</html>
