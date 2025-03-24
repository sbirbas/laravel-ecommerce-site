@extends('layout.app')

@section('title', 'Product Details')

@section('content')

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 p-4">
    <div class="flex justify-center lg:justify-start">
        <img class="w-full lg:w-80 h-48 object-cover rounded-lg" src="{{ $listing->img }}" alt="Product Image">
    </div>

    <div class="flex flex-col justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">{{ $listing->title }}</h1>

            <h5 class="text-xl text-gray-700 mt-2"><strong>${{ $listing->price }}</strong></h5>

            <p class="text-gray-600 mt-4">{{ $listing->description }}</p>
        </div>
        <div class="mt-6">
            <form action="{{ route('add-to-cart', $listing->id) }}" method="POST">
                @csrf
                <button type="submit" class="w-full lg:w-auto bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    Add to Cart
                </button>
            </form>
        </div>
    </div>
</div>

@endsection
