@extends('master')

@section('content')
    <div class="container-fluid mt-5 p-5">
        <div class="container">
            <div class="row">
                @if (Auth::check())
                    <h1>{{ Auth::user()->username }}</h1>
                @endif


                @foreach ($buku as $b)
                    <div class="col-12 col-md-3">
                        <a href="/library/{{ $b->id }}" class="text-decoration-none">
                            <div class="card text-white bg-dark">
                                <img class="card-img-top"
                                    src="https://penerbitbaca.com/wp-content/uploads/2023/10/The-Psychology-of-Money.jpg""
                                    alt="Title" />
                                <div class="card-body d-flex justify-content-between">
                                    <div class="wrapper">
                                        <h4 class="card-title">{{ $b->judul }}</h4>
                                        <p class="card-text">{{ $b->penulis }}</p>
                                    </div>

                                    @if (Auth::User()->koleksibuku == $b->id)
                                        <button onclick="bookmark()" class="btn btn-outline-light"><i
                                                class="bi bi-bookmark-fill"></i></button>
                                    @else
                                        <button onclick="bookmark()" class="btn btn-outline-light"><i
                                                class="bi bi-bookmark"></i></button>
                                    @endif

                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
