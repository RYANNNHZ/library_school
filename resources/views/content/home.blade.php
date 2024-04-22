@extends('master')

@section('content')
    <div class="container-fluid mt-5 p-5">
        <div class="container">
            <div class="row">
                @if (Auth::check())
                    <h1>{{ Auth::user()->username }}</h1>
                @endif


                <div class="col-12 col-md-3">
                    <div class="card bg-dark text-dark">
                        <img class="card-img"
                            src="https://gerai.kompas.id/wp-content/uploads/2023/12/COVER-DEPAN-FILOSOFI-TERAS-VERSI-CU-51-PhotoRoom.jpg"
                            alt="Title" />
                        <div class="card-img-overlay ">
                            <h4 style="background: rgba(146, 146, 146, 0.7)" class="card-title p-1 text-light  rounded-2">
                                Filosfi teras
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div class="card bg-dark text-dark">
                        <img class="card-img"
                            src="https://gerai.kompas.id/wp-content/uploads/2023/12/COVER-DEPAN-FILOSOFI-TERAS-VERSI-CU-51-PhotoRoom.jpg"
                            alt="Title" />
                        <div class="card-img-overlay ">
                            <h4 style="background: rgba(146, 146, 146, 0.7)" class="card-title p-1 text-light  rounded-2">
                                Filosfi teras
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div class="card bg-dark text-dark">
                        <img class="card-img"
                            src="https://gerai.kompas.id/wp-content/uploads/2023/12/COVER-DEPAN-FILOSOFI-TERAS-VERSI-CU-51-PhotoRoom.jpg"
                            alt="Title" />
                        <div class="card-img-overlay ">
                            <h4 style="background: rgba(146, 146, 146, 0.7)" class="card-title p-1 text-light  rounded-2">
                                Filosfi teras
                            </h4>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-3">
                    <div class="card bg-dark text-dark">
                        <img class="card-img"
                            src="https://gerai.kompas.id/wp-content/uploads/2023/12/COVER-DEPAN-FILOSOFI-TERAS-VERSI-CU-51-PhotoRoom.jpg"
                            alt="Title" />
                        <div class="card-img-overlay ">
                            <h4 style="background: rgba(146, 146, 146, 0.7)" class="card-title p-1 text-light  rounded-2">
                                Filosfi teras
                            </h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
