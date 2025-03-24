@extends('layout.app')

@section('title', 'Product Details')

@section('content')

<h1>Your Cart</h1>
    @foreach($cartItems as $item)
    <div>
        <h3>{{ $item->listing->title }}</h3>
        <p>{{ $item->quantity }} x ${{ $item->price }}</p>
        <p>Total: ${{ $item->quantity * $item->price }}</p>
    </div>
@endforeach

@endsection
