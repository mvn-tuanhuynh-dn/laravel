<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ccd4eab307.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="page-header">
        <div class="container">
            <h1>
                @yield('titlepage')
            </h1>
        </div>
    </header>
    @show
    <div class="container">
        @yield('contain')
    </div>
</body>
</html> 