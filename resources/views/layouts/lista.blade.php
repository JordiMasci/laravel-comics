@extends('home')

@section('main')
    <section>
        <div class="container">
            <h1>{{ $title }}</h1>

            <div class="row">
                @foreach ($fumetti as $fumetto)
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header">
                                {{ $fumetto['title'] }}
                            </div>
                            <img src="{{ $fumetto['thumb'] }}" alt="">
                            <div class="card-body">
                                {{ $fumetto['description'] }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
