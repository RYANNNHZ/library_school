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
                            <div class="col-lg-6 mb-5 mb-lg-0">
                                <h1 class="my-5 display-3 fw-bold ls-tight">
                                    Welcome back! <br />
                                    <span class="text-primary">have enjoy </span>
                                </h1>
                                <p style="color: hsl(217, 10%, 50.8%)">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Eveniet, itaque accusantium odio, soluta, corrupti aliquam
                                    quibusdam tempora at cupiditate quis eum maiores libero
                                    veritatis? Dicta facilis sint aliquid ipsum atque?
                                </p>
                            </div>

                            <div class="col-lg-6 mb-5 mb-lg-0">
                                <div class="card">
                                    <div class="card-body py-5 px-md-5">
                                        <form action="/session/store" method="POST">
                                            @csrf
                                            <!-- 2 column grid layout with text inputs for the first and last names --
                                                                    <!-- Email input -->
                                            @if ($errors->has('email'))
                                                <small class="text-danger">{{ $errors->first('email') }}</small>
                                            @endif
                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <input type="email" name="email" value="{{ old('email') }}"
                                                    id="form3Example3" class="form-control" />
                                                <label class="form-label" for="form3Example3">Email address</label>
                                            </div>

                                            <!-- Password input -->
                                            @if ($errors->has('email'))
                                                <small class="text-danger">{{ $errors->first('email') }}</small>
                                            @endif
                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <input type="password" name="password" value="{{ old('password') }}"
                                                    id="form3Example4" class="form-control" />
                                                <label class="form-label" for="form3Example4">Password</label>
                                            </div>

                                            <!-- Checkbox -->
                                            <div class="form-check d-flex justify-content-center mb-4">
                                                <input class="form-check-input me-2" type="checkbox" value=""
                                                    id="form2Example33" checked />
                                                <label class="form-check-label" for="form2Example33">
                                                    Subscribe to our newsletter
                                                </label>
                                            </div>

                                            <!-- Submit button -->
                                            <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-primary btn-block mb-4">
                                                Sign in
                                            </button>

                                            <!-- Register buttons -->
                                            <div class="text-center">
                                                <p>or sign up with: <a href="/register">Register</a></p>
                                                <button type="button" data-mdb-button-init data-mdb-ripple-init
                                                    class="btn btn-link btn-floating mx-1">
                                                    <i class="fab fa-facebook-f"></i>
                                                </button>

                                                <button type="button" data-mdb-button-init data-mdb-ripple-init
                                                    class="btn btn-link btn-floating mx-1">
                                                    <i class="fab fa-google"></i>
                                                </button>

                                                <button type="button" data-mdb-button-init data-mdb-ripple-init
                                                    class="btn btn-link btn-floating mx-1">
                                                    <i class="fab fa-twitter"></i>
                                                </button>

                                                <button type="button" data-mdb-button-init data-mdb-ripple-init
                                                    class="btn btn-link btn-floating mx-1">
                                                    <i class="fab fa-github"></i>
                                                </button>
                                            </div>
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
