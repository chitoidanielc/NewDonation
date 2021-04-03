<!DOCTYPE html>
<html>
<head>
    <title>Donation App</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <style>
        .inline { display: inline-flex;}
        .mgr-5 { margin-right: 5px; }
    </style>
</head>
<body>
        <div class="container">
            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ URL::to('sharks') }}">Donators Alert</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('donation') }}">View All Donators</a></li>
                    <li><a href="{{ URL::to('donation/create') }}">Create a Donator</a>
                </ul>
            </nav>
            @yield('content')
        </div>
    </body>
</html>
