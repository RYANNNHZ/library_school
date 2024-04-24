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
                    </ul>
                </div>
                <div class="card-body wrapper" id="wrapper">
                    @if (session('sukses'))
                    <div class="alert alert-success">
                        {{ session('sukses') }}
                    </div>
                @endif
                    <form action="/library/{{ $buku->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="" class="form-label">judul</label>
                            <input type="text" value="{{ $buku->judul }}" class="form-control" name="judul"
                                id="" aria-describedby="helpId" placeholder="" />
                                @if ($errors->has('judul'))
                                <small id="helpId" class="form-text text-danger">{{$errors->first('judul')}}</small>
                                @endif
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">penulis</label>
                            <input type="text" value="{{ $buku->penulis }}" class="form-control" name="penulis"
                                id="" aria-describedby="helpId" placeholder="" />
                                @if ($errors->has('penulis'))
                                <small id="helpId" class="form-text text-danger">{{$errors->first('penulis')}}</small>
                                @endif
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">penerbit</label>
                            <input type="text" value="{{ $buku->penerbit }}" class="form-control" name="penerbit"
                                id="" aria-describedby="helpId" placeholder="" />
                                @if ($errors->has('penerbit'))
                                <small id="helpId" class="form-text text-danger">{{$errors->first('penerbit')}}</small>
                                @endif
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">pilih kategori </label>
                            @foreach ($category as $item)
                                <input type="checkbox" value="{{ $item->id }}" class="" name="kategori[]"
                                    id="" aria-describedby="helpId" placeholder="" /> {{ $item->nama_kategori }}
                            @endforeach
                        </div>

                        <button type="submit" class="btn btn-warning ">edit</button>

                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
