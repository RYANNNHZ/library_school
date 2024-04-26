@extends('userdashboard')


@section('content')
@foreach ($user->koleksibuku as $b)
<div class="col-12 col-md-3 mb-3">
    <a href="/library/{{ $b->id }}" class="text-decoration-none">
        <div class="card text-white bg-dark">
            <img class="card-img-top"
                src="https://penerbitbaca.com/wp-content/uploads/2023/10/The-Psychology-of-Money.jpg""
                alt="Title" />
            <div class="card-body d-flex justify-content-between">
                <div class="wrapper">
                    <h4 class="card-title">{{ $b->judul }} </h4>
                    <p class="card-text">{{ $b->penulis }}</p>
                </div>

                <div class="wrapper-event d-flex justify-content-center align-items-center ">
                    <div class="wrapper-event d-flex">
                        <button onclick="bookmark()" class="btn btn-outline-light ms-1 "><i
                                class="bi bi-bookmark"></i></button>
                        <button onclick="bookmark()" class="btn btn-outline-light ms-1"><i
                                class="bi bi-book"></i></button>
                    </div>
                </div>


            </div>
        </div>
    </a>
</div>
@endforeach
@endsection
