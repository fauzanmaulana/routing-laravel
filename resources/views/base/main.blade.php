<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <title>Tugas Routing</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link text-white" href="#">Features</a>
                <a class="nav-item nav-link text-white" href="#">Pricing</a>
                <a class="nav-item nav-link text-white" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="text-right icon-jumb"><img src="https://img.icons8.com/officel/160/000000/captain-america.png"/> <span class="text-white">Fauzan Maulana</span></h1>

                <div class="icon-home" style="background-image:url({{ asset('images/main-background.jpeg') }})"></div>
            </div>
        </div>

        <div>&nbsp;</div>

        <div>&nbsp;</div>

        <div>&nbsp;</div>

        <div>&nbsp;</div>

        <section>
            @yield('content')
        </section>
    </main>
</body>
</html>