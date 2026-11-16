<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("css/bootstrap-grid.css.map")}}">
    <link rel="stylesheet" href="{{asset("css/bootstrap-utilities.css")}}">
    <link rel="stylesheet" href="{{asset("css/bootstrap-reboot.css")}}">
    <title>@yield('title', 'title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid container">
            <a class="navbar-brand" href="/"><img src="{{ asset("images/logoBbs.png") }}" alt="" width="35"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">О компании</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/catalog">Каталог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/category">Создать категорию</a>
                    </li>
                    @for($i = 1; $i <= 11; $i++)
                        <li class="nav-item">
                            <a class="nav-link" href="/show/{{ $i }}">№{{ $i }}</a>
                        </li>
                    @endfor

                    <a href="/practice">ПРАКТИКА</a>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="/db">Дашборд</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <main class="container">
        @yield('content')
        <aside>
            @yield('adverts', 'МЕСТО ДЛЯ РЕКЛАМЫ')
        </aside>
    </main>
    <script src="{{ asset("js/bootstrap.js") }}"></script>
    <script src="{{ asset("js/bootstrap.bundle.js") }}"></script>
</body>

</html>
