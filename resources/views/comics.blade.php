@extends('layouts.app')

@section('content')
    <section id="hero"></section>

    <section class="cards py-5 bg-dark">
        <div class="container pt-3">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-2">
                        <div class="single-card">
                            <div class="card-img">
                                <img src="{{ $comic['thumb'] }}" alt="">
                            </div>
                            <h5>{{ $comic['series'] }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
