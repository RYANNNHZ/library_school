@extends('template')


@section('content')
    @if (Auth::check())
        <h1>{{Auth::user()->username}}</h1>
    @endif
@endsection
