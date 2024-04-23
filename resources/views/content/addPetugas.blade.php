@extends('template')


@section('content')
    <div class="container-fluid mt-5">
        <div class="container">
            <!-- Section: Design Block -->
            <section class="">
                <!-- Jumbotron -->
                <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
                    <div class="container">
                        <div class="row gx-lg-5 align-items-center">
                            <a href="/admin" class="text-dark ">
                                <h1><i class="bi bi-arrow-left-square-fill"></i></h1>
                            </a>
                            <div class="col-lg-6 mb-5 mb-lg-0">
                                <h1 class="my-5 display-3 fw-bold ls-tight">
                                    add your staff <br /><i class="bi bi-person text-warning d-inline "></i>
                                </h1>
                                <p style="color: hsl(217, 10%, 50.8%)">
                                    tambahkan staff baru untuk membantu anda dalam megelola
                                    buku buku yang ada di dalam galery jangan lupa untuk
                                    mencatat tiap password para staff anda
                                </p>
                            </div>

                            <div class="col-lg-6 mb-5 mb-lg-0">
                                <div class="card">
                                    <div class="card-body py-5 px-md-5">
                                        <form action="{{ route('addPetugas.store') }}" method="POST">
                                            @csrf
                                            <!-- 2 column grid layout with text inputs for the first and last names -->
                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    @if ($errors->has('username'))
                                                        <small class="text-danger">{{ $errors->first('username') }}</small>
                                                    @endif
                                                    <div data-mdb-input-init class="form-outline">
                                                        <input type="text" name="username" id="form3Example1"
                                                            class="form-control" />
                                                        <label class="form-label" for="form3Example1">username</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    @if ($errors->has('nama_lengkap'))
                                                        <small
                                                            class="text-danger">{{ $errors->first('nama_lengkap') }}</small>
                                                    @endif
                                                    <div data-mdb-input-init class="form-outline">
                                                        <input type="text" name="nama_lengkap" id="form3Example2"
                                                            class="form-control" />
                                                        <label class="form-label" for="form3Example2">nama lengkap</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Email input -->
                                            @if ($errors->has('email'))
                                                <small class="text-danger">{{ $errors->first('email') }}</small>
                                            @endif
                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <input type="email" name="email" id="form3Example3"
                                                    class="form-control" />
                                                <label class="form-label" for="form3Example3">Email address</label>
                                            </div>

                                            <!-- Password input -->
                                            @if ($errors->has('password'))
                                                <small class="text-danger">{{ $errors->first('password') }}</small>
                                            @endif
                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <input type="password" name="password" id="form3Example4"
                                                    class="form-control" />
                                                <label class="form-label" for="form3Example4">Password</label>
                                            </div>


                                            <!-- Submit button -->
                                            <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-warning  btn-block mb-4">
                                                add
                                            </button>

                                            <!-- Register buttons -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Jumbotron -->
            </section>
            <!-- Section: Design Block -->
        </div>
    </div>
@endsection
