@extends('home')

@section('main')
    <div class="container">
        <h1>{{ $title }}</h1>

        <div class="row">
            @foreach ($fumetti as $fumetto)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            {{ $fumetto['title'] }}
                        </div>
                        <div class="card-body">
                            <img src="{{$fumetto['thumb']}}" alt="">
                            {{ $fumetto['description'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
