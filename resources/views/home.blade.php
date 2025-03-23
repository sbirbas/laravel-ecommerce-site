@extends('layout.app')

@section('title', 'Home Page')

@section('content')

<div id ="hero" class="w-screen h-32">
<h1 class="text-6xl w-50 m-5">Finding Your Style on a Budget</h1>
</div>

<div class="featured row p-5">
    <h1 class="text-center">Featured Items</h1>
    @include('partials.product-card')
    {{-- @foreach ($featured as $feature)
    @endforeach --}}
</div>

@endsection
