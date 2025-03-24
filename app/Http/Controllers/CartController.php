<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Cart;
use App\Models\User;

class CartController extends Controller
{
    public function showCart()
    {
        $cartItems = Cart::where('user_id', auth()->id())->get();
        return view('auth.cart', compact('cartItems'));
    }

    public function addToCart(Request $request, $id, User $user)
    {
        $listing = Listing::findOrFail($id);
        Cart::create([
            'user_id' => $user->id,
            'listing_id' => $listing->id,
            'quantity' => $request ->input,
            'price' => $listing->price,
        ]);
       return redirect()->route('cart');
    }
}
