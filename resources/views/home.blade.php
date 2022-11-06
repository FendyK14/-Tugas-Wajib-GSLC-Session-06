@extends('template')

@section('title', 'Home')

@section('content')
    <div class="container">
        <h1 class="p-md-3  fw-bold text-center border-down font-type border-bottom border-dark border-2"
            style="font-size: 50px;">
            Character</h1>
        <div class="row p-md-6">
            @foreach ($post_character as $post)
                <div class="col-md-4 p-3 font-type" style="display: flex; flex-wrap: wrap">
                    <div class="card shadow-lg" style="border: 1px solid black; ">
                        <img src={{ $post->character_image }} class="card-img-top" alt="character_image">
                        <div class="card-body">
                            <h5 class="card-title text-center pt-3 border-top">
                                {{ $post->character_name }}</h5>
                            <p class="card-text text-justify">{{ $post->background }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Weapon : {{ $post->weapon }}</li>
                            <li class="list-group-item">Region : {{ $post->region }}</li>
                            <li class="list-group-item">Vision : {{ $post->vision }}</li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
