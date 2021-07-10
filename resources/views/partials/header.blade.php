<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Pharma Products</title>
</head>

<body class="bg-dark">

    <div class="container d-flex align-items-center mt-5 mb-5">
        <img src="{{ Voyager::image('Logo\cartLogo.png') }}" alt="Cart Logo" width="60px">
        <h1 class="text-uppercase  fw-bold h3" style="margin-left:1rem !important;color: #FA531C">Happy
            Cart
        </h1>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pharma Products</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <div class="bg-dark">
        @yield('content');
    </div>

    <footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
        </script>
    </footer>

</body>

</html>
