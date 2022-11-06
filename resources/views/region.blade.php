@extends('template')

@section('title', 'Region')

@section('content')
    <div class="font-type">
        <div class="p-md-4" style="background-color: #a2e7f8">
            <h1 class="fw-bold text-center font-type border-bottom border-dark border-2" style="font-size: 75px; margin: 10px 300px">Teyvat</h1>
        </div>
        @foreach ($post_region as $post)
            <div class="position-relative font-type">
                <div class="bg-dark">
                    <img src={{ $post->region_image }} class="img-fluid" alt="">
                </div>
                <div class="text-white bg-dark opacity-75 position-absolute top-50 fs-4 text-center">
                    <h1 class="fw-bold border-bottom" style="margin: 25px 300px">~{{ $post->region_name }}~</h1>
                    <p class="p-3 m-3">{{ $post->region_description }}</p>
                </div>
            </div>
    </div>

    {{-- <div class="card mb-3">
                    <img src={{ $post->region_image }} class="card-img-top" alt="region_image">
                    <div class="card-body"  style="border: 3px solid black">
                        <h5 class="card-title fs-1 text-center"  style="border-bottom: 1.5px solid black">{{ $post->region_name }}</h5>
                        <p class="card-text fs-3">{{ $post->region_description }}</p>
                    </div>
                </div> --}}
    @endforeach
    {{-- </div> --}}
@endsection
