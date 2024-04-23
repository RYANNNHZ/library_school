{{-- @dd($category) --}}
@extends('template')


@section('content')
    <div class="container-fluid mt-5 mx-auto ">
        <div class="container">
            <div class="card w-50  mx-auto ">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="true" href="#">Active tab</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tab</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled tab</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                            placeholder="" />
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                            placeholder="" />
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <select name="" id="" class="form-control">
                            @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                            @endforeach
                        </select>
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                    <button type="submit" class="btn btn-primary ">addBook</button>

                </div>
            </div>

        </div>
    </div>
@endsection
