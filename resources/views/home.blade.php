@extends('layout.app')

@section('title', 'Home Page')

@section('content')

<div id ="hero" class="w-screen h-32">
<h1 class="text-6xl w-50 m-5">Finding Your Style on a Budget</h1>
</div>

<div class="featured p-5">
    <h1 class="text-center mb-4">Featured Items</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @foreach($listings as $listing)
            <div>
                @include('partials.product-card', ['listing' => $listing])
            </div>
        @endforeach
    </div>
</div>


@endsection
