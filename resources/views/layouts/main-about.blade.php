@extends('home')

@section('main')
    <div class="container">
        @foreach ($arrayTipo as $item)
            <ul>
                <li>{{ $item }}</li>
            </ul>
        @endforeach
    </div>
@endsection
