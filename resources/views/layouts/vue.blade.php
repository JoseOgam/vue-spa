<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Joseph | Legit Portfolio</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">

    <!-- Main Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>
<body>
<header class="navigation fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand font-tertiary h3" href="index.html"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="navigation">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{(route('index.index'))}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{(route('about.index'))}}">about</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('portfolio.index')}}">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{(route('contact.index'))}}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Resume</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<div id="app">

    <main class="py-4">
        @yield('content')
        <router-view></router-view>
        <vue-progress-bar></vue-progress-bar>
    </main>
</div>

<!-- footer -->
<footer class="bg-dark footer-section">
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="text-light">Email</h5>
                    <p class="text-white paragraph-lg font-secondary">jose@legit.co.ke</p>
                </div>
                <div class="col-md-4">
                    <h5 class="text-light">Phone</h5>
                    <p class="text-white paragraph-lg font-secondary">+254700013671</p>
                </div>
                <div class="col-md-4">
                    <h5 class="text-light">Address</h5>
                    <p class="text-white paragraph-lg font-secondary">Kisumu Town Area, Kenya</p>
                </div>
            </div>
        </div>
    </div>
    <div class="border-top text-center border-dark py-5">
        <p class="mb-0 text-light">Copyright ©<script>
                var CurrentYear = new Date().getFullYear()
                document.write(CurrentYear)
            </script> Legit </p>
    </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- filter -->
<script src="plugins/shuffle/shuffle.min.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>
