<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CRSF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                Marahobina
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}" class=""><button
                                        class="btn btn-primary text-white">Login</button></a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="container py-5">
        {{-- main content --}}
        <div class="row mt-4">
            <div class="col-6 align-self-center">
                <h1><b>The Most Complete Place To Meet Hobbyist Needs</b></h1>
                <a href="" class="btn btn-dark text-primary rounded-pill">Buy Now!</a>
            </div>
            <div class="col-6 align-self-center"><img src="{{ asset('./img/eva-01.svg') }}" alt="eva-01"></div>
        </div>

        {{-- section catagories --}}
        <section id="kategori" class="my-5">
            <div class="field p-4">
                <h1 class="text-center text-primary fw-bold mb-5">Categories</h1>

                <div class="row row-cols-1 row-cols-md-3 g-3 justify-content-between">
                    <div class="col">
                        <a href=""><img src="{{ asset('./img/kt-1.svg') }}" class="card-img-top" alt="nendroid"></a>
                    </div>
                    <div class="col">
                            <a href=""><img src="{{ asset('./img/kt-2.svg') }}" class="card-img-top" alt=""></a>
                    </div>
                    <div class="col">
                            <a href=""><img src="{{ asset('./img/kt-3.svg') }}" class="card-img-top" alt=""></a>
                    </div>
                </div>

            </div>
        </section>

        {{-- section req order --}}
        <section id="req">
            <div class="field p-4">
                <h1 class="text-center fw-bold">Item For Request Order</h1>

            </div>
        </section>

        {{-- section barang --}}
        <section id="brng">
            <div class="col-4 offset-8 py-5">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>

        </section>

        {{-- section footer --}}
        <section id="ftr">
            <h1 class="fw-bold">Marahobina. We're Here!</h1>
            <p>Contact Us:</p>
            <div class="flex">
                <p>WhatsApp</p>
                <p>Instagram</p>
            </div>
            <p>copyright &copy; {{ date('Y') }} Marahobina</p>
        </section>
        {{-- end container --}}
    </div>
</body>

</html>