@extends('template')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="card border-primary w-50 mx-auto p-3 ">
                <div class="card-body p-2">
                    @if (Auth::User()->role == 'administrator')
                        <a href="/admin" class="text-warning"><i class="bi bi-arrow-left-square-fill"></i></a>
                    @else
                        <a href="/library" class="text-warning"><i class="bi bi-arrow-left-square-fill"></i></a>
                    @endif
                    <h1 class="card-title">{{ $buku->judul }}</h1>
                    <p class="card-text"> penulis : {{ $buku->penulis }}</p>
                    <p class="card-text"> penerbit : {{ $buku->penerbit }}</p>

                    <h4>kategori</h4>
                    <table class="table-borderless ">
                        @foreach ($buku->kategori as $item)
                            <tr>
                                <td>
                                    {{ $item->nama_kategori }}
                                </td>
                            </tr>
                        @endforeach

                    </table>

                </div>
                @if (Auth::User()->role == 'administrator')
                <div class="">
                    <a href="/del/{{ $buku->id }}" class="text-center btn btn-danger">delete</a>
                    <a href="/library/{{ $buku->id }}/edit" class="text-center btn btn-warning">edit</a>
                </div>
                @endif
            </div>

        </div>
    </div>
@endsection
