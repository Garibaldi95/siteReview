<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">

<header class="d-flex flex-wrap align-items-center justify-content-center bg-dark text-white justify-content-md-between py-3 mb-4 border-bottom">

    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">petProject</span>
    </a>
    <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
            <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>
    </div>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2 text-white link-secondary">Главная</a></li>
        <li><a href="/about" class="nav-link px-2 text-white">Про нас</a></li>
    </ul>

    <div class="col-md-3 text-end">
        <a href="/review" class="btn btn-outline-warning">Отзывы</a>
    </div>
</header>

<div class="container">

    @yield('main_content')

</div>




</body>
</html>
