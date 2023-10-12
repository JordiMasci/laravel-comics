@extends('home')

@section('main')
    @foreach ($arrayTipo as $item)
        <ul>
            <li>{{ $item }}</li>
        </ul>
    @endforeach
@endsection
