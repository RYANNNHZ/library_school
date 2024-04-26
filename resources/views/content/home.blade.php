@dd(Auth)
@extends('master')
@auth
    
@endauth
@section('content')
    <div class="container-fluid mt-5 p-5">
        <div class="container">

            <div class="  wrapper-searching d-flex mb-3 ">
                <form action="/cari" method="GET" class="d-flex">
                    @csrf
                    <input type="text" class="form-control ms-2" name="cari" id="" aria-describedby="helpId"
                        placeholder="search..." />

                    <button type="submit" class="btn btn-dark text-light ms-2"><i class="bi bi-search"></i></button>
                </form>
            </div>

            <div class="row">
                @if (!$buku)
                @else
                    @foreach ($buku as $b)
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

                                                {{-- @if (Auth::User()->koleksibuku == $buku->id)

                                                @else

                                                @endif --}}
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
                @endif
            </div>
        </div>
    </div>
@endsection
