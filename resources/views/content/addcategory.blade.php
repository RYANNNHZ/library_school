{{-- @dd($category) --}}
@extends('template')


@section('content')
    <div class="container-fluid mt-5 mx-auto ">
        <div class="container">
            <div class="card w-50  mx-auto ">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="true" href="/admin"><i
                                    class="bi bi-arrow-left-square-fill"></i></a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">Tab</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled tab</a>
                        </li> --}}
                    </ul>
                </div>
                <div class="card-body wrapper" id="wrapper">

                    @if (session('sukses'))
                        <div class="alert alert-success">
                            {{ session('sukses') }}
                        </div>
                    @endif

                    <form action="/addcategory/store" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">add category</label>
                            <input type="text" class="form-control" name="nama_kategori" id=""
                                aria-describedby="helpId" placeholder="" />
                        </div>
                        @if ($errors->has('nama_kategori'))
                            <small id="helpId" class="form-text text-danger">{{ $errors->first('nama_kategori') }}</small>
                        @endif



                        <button type="submit" class="btn btn-primary ">addcategory</button>

                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
