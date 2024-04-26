<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>page | {{ $title }}</title>
    <link rel="stylesheet" href="{{ url('css') . '/bootstrap.css' }}">
    <link rel="stylesheet" href="{{ url('icon') . '/font/bootstrap-icons.css' }}">
</head>
<div class="container-fluid">
    <div class="container mt-5">

        <div class="row mb-3 w-75 mx-auto d-flex justify-content-start ">
            <h4><a href="/library" class="text-decoration-none text-dark"><i class="bi bi-arrow-left-square"></i></a>
            </h4>
        </div>

        <div class="row">
            <div class="col-12" id="wrapper-profile">
                <div class="card mb-3 mx-auto" style="max-width: 600px;">
                    <div class="row g-0">
                        <div class=" col-12 col-md-4">
                            <img src="https://cdn.icon-icons.com/icons2/3054/PNG/512/account_profile_user_icon_190494.png"
                                class="img-fluid rounded-start" alt="Card title" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class="card-title">{{ $user->username }}</h1>
                                <p class="card-text">{{ $user->nama_lengkap }}</p>
                                <p class="card-text">
                                    <small class="text-muted">{{ $user->role }}</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12" id="wrapper-profile">
                <div class="card mb-3 mx-auto" style="max-width: 600px;">
                    <div class="row g-0">
                        <div class="col-12">
                            <div class="card-body d-flex justify-content-around ">

                                @if ($title == 'pinjam')
                                    <h3><a href="/Udashboard/{{ $user->id }}"
                                            class="text-dark text-decoration-none"><i class="bi bi-book-fill"></i></a>
                                    </h3>
                                @else
                                    <h3><a href="/Udashboard/{{ $user->id }}"
                                            class="text-dark text-decoration-none"><i class="bi bi-book"></i></a></h3>
                                @endif



                                @if ($title == 'bookmark')
                                    <h3><a href="/bookmark/{{ $user->id }}"
                                            class="text-dark text-decoration-none"><i
                                                class="bi bi-bookmark-fill"></i></a></h3>
                                @else
                                    <h3><a href="/bookmark/{{ $user->id }}"
                                            class="text-dark text-decoration-none"><i class="bi bi-bookmark"></i></a>
                                    </h3>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            @yield('content')

        </div>

    </div>
</div>

<body>
    <script src="{{ url('js') . '/popper.js' }}"></script>
    <script src="{{ url('js') . '/bootstrap.js' }}"></script>
    <script src="{{ url('js') . '/App.js' }}"></script>
</body>

</html>
