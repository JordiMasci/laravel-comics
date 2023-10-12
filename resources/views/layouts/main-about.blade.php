@extends('home')

@section('main')
    <section>
        <div class="container">
            @foreach ($arrayTipo as $item)
                <ul>
                    <li>{{ $item }}</li>
                </ul>
            @endforeach
        </div>
    </section>
@endsection
