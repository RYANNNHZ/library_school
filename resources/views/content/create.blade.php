@extends('template')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="card text-start w-50 mx-auto border-black">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control border-black" name="" id=""
                                aria-describedby="helpId" placeholder="" />
                            <small id="helpId" class="form-text text-danger">error here</small>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control border-black" name="" id=""
                                aria-describedby="helpId" placeholder="" />
                            <small id="helpId" class="form-text text-danger">error here</small>
                        </div>

                        <button type="submit" class="btn btn-primary ">login </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
